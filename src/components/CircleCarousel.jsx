import * as THREE from "three";
import { useMemo, useRef, useState, useEffect } from "react";
import { Canvas, useThree } from "@react-three/fiber";
import { OrbitControls, Html } from "@react-three/drei";
import { mergeGeometries } from "three/examples/jsm/utils/BufferGeometryUtils.js";
import useReadApi from "./ReadApi";

import { add, div } from "three/tsl";
import "./CircleCarousel.css";

function Carousel({ onPageClick, onAdditionalInfoClick, carouselRotation }) {
  const meshRef = useRef();
  const { gl, camera, raycaster, pointer } = useThree();
  const [texture, setTexture] = useState(null);
  const [gridDimensions, setGridDimensions] = useState(null);
  const [apiData, setApiData] = useState(null);

  // Fetch API data once when component mounts
  const { posts } = useReadApi();

  const validPages = useMemo(
    () => posts?.pages?.filter((page) => page && page.img) || [],
    [posts]
  );
  const division = useMemo(() => {
    const totalPages = validPages.length;
    if (totalPages === 0) return { x: 1, y: 1 };

    /*     const cols = totalPages;
    const rows = 1; */

    return { x: totalPages, y: 1, total: totalPages };
  }, [validPages]);

  useEffect(() => {
    const totalTiles = validPages.length;
    if (totalTiles === 0) return;

    setGridDimensions(division);

    const canvas = document.createElement("canvas");
    const tileWidth = 1800;
    const tileHeight = 2000;
    canvas.width = tileWidth * division.x;
    canvas.height = tileHeight * division.y;
    const ctx = canvas.getContext("2d");

    ctx.fillStyle = "#1a1a1a";
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    let loadedCount = 0;

    validPages.forEach((page, i) => {
      console.log(validPages);
      const img = new Image();
      img.onload = () => {
        loadedCount++;
        const x = i % division.x;
        const y = Math.floor(i / division.x);
        ctx.drawImage(
          img,
          x * tileWidth,
          y * tileHeight,
          tileWidth,
          tileHeight
        );

        if (loadedCount === totalTiles) {
          const tex = new THREE.CanvasTexture(canvas);
          tex.colorSpace = THREE.SRGBColorSpace;
          tex.anisotropy = gl.capabilities.getMaxAnisotropy();
          setTexture(tex);
        }
      };
      img.onerror = () => {
        loadedCount++;
        const x = i % division.x;
        const y = Math.floor(i / division.x);
        ctx.fillStyle = "#333";
        ctx.fillRect(x * tileWidth, y * tileHeight, tileWidth, tileHeight);
        ctx.fillStyle = "#666";
        ctx.font = "32px Arial";
        ctx.fillText(
          `Page ${page.page_id}`,
          x * tileWidth + 20,
          y * tileHeight + 40
        );

        if (loadedCount === totalTiles) {
          const tex = new THREE.CanvasTexture(canvas);
          tex.colorSpace = THREE.SRGBColorSpace;
          tex.anisotropy = gl.capabilities.getMaxAnisotropy();
          setTexture(tex);
        }
      };
      img.src = page.img;
    });
  }, [gl, validPages, division]);

  const geometry = useMemo(() => {
    if (!gridDimensions) return null;

    const totalAmount = gridDimensions.total || validPages.length;

    const len = totalAmount * 1;
    const r = len / (Math.PI * 2);
    const segAngle = (Math.PI * 2) / len / 1;

    const tileHeightRatio = 0.5;
    const seg = new THREE.CylinderGeometry(
      r,
      r,
      tileHeightRatio,
      10,
      1,
      true,
      0,
      segAngle
    );
    const gs = [];

    for (let i = 0; i < totalAmount; i++) {
      const x = i % gridDimensions.x;
      const y = Math.floor(i / gridDimensions.x);
      const g = seg.clone();

      const gUV = g.attributes.uv;
      for (let j = 0; j < gUV.count; j++) {
        const u = (gUV.getX(j) + x) / gridDimensions.x;
        const v = (gUV.getY(j) + y) / gridDimensions.y;
        gUV.setXY(j, u, v);
      }

      g.rotateY(((Math.PI * 2) / totalAmount) * i);

      g.setAttribute(
        "pageIndex",
        new THREE.BufferAttribute(
          new Float32Array(g.attributes.position.count).fill(i),
          1
        )
      );

      gs.push(g);
    }

    return mergeGeometries(gs);
  }, [gridDimensions, validPages]);

  const material = useMemo(() => {
    if (!texture) return null;

    return new THREE.MeshBasicMaterial({
      side: THREE.DoubleSide,
      map: texture,
      toneMapped: false,
    });
  }, [texture]);

  if (!material || !geometry) return null;

  return (
    <>
      <mesh ref={meshRef} geometry={geometry} material={material} />
      {validPages.map((page, i) => {
        const totalAmount = validPages.length;
        const angle = ((Math.PI * 2) / totalAmount) * i;
        const len = totalAmount * 1;
        const r = len / (Math.PI * 2);
        const tileHeightRatio = 0.5;

        const currentAngle = (angle - carouselRotation) % (Math.PI * 2);
        const normalizedAngle = currentAngle < 0 ? currentAngle + Math.PI * 2 : currentAngle;
        
        const distanceFromFront = Math.min(normalizedAngle, Math.PI * 2 - normalizedAngle);
        
        const angleThreshold = (Math.PI * 2) / totalAmount * 2;
        const showButton = distanceFromFront < angleThreshold;

        if (!showButton) return null;
       
        
        const segAngle = (Math.PI * 2) / totalAmount / 1;

        //TODO: change main_info_button content
        const mainButtonCoords = page.main_info_button?.[0] || {
          x_cordinate: 0.03,
          y_cordinate: -0.56,
        };

        const mainOffsetAngle = segAngle * mainButtonCoords.x_cordinate;
        const mainButtonAngle = angle + mainOffsetAngle;
        const mainX = Math.sin(mainButtonAngle) * r;
        const mainZ = Math.cos(mainButtonAngle) * r;
        const mainY = tileHeightRatio * mainButtonCoords.y_cordinate;

        const buttons = [
          <Html
            key={`${page.page_id}-main`}
            position={[mainX, mainY, mainZ]}
            center
            distanceFactor={1.5}
            style={{ pointerEvents: "auto" }}
          >
            <button
              onClick={(e) => {
                e.stopPropagation();
                onPageClick(page, i);
              }}
              className="z-50 font-semibold text-white bg-[#000000d9] border-2 border-[#ffffff33] w-[3.5vh] h-[3.5vh] flex items-center justify-center rounded-full hover:scale-110 hover:bg-[#0000001a] hover:border-[#ffffff66]"
            >
              i
            </button>
          </Html>,
        ];

        // Add additional info buttons if they exist
        if (page.additionalinformations && Array.isArray(page.additionalinformations)) {
          page.additionalinformations.forEach((additionalInfo, idx) => {
            if (additionalInfo.cordinate_x !== 0.03 && additionalInfo.cordinate_y !== -0.56) {
              // const addButtonCoords = additionalInfo.additional_info_button[0];
              const addOffsetAngle = segAngle * additionalInfo.cordinate_x;
              const addButtonAngle = angle + addOffsetAngle;
              const addX = Math.sin(addButtonAngle) * r;
              const addZ = Math.cos(addButtonAngle) * r;
              const addY = tileHeightRatio * additionalInfo.cordinate_y;
              buttons.push(
                <Html
                  key={`${page.page_id}-additional-${idx}`}
                  position={[addX, addY, addZ]}
                  center
                  distanceFactor={1.5}
                  style={{ pointerEvents: "auto" }}
                >
                  <div
                    onClick={(e) => {
                      e.stopPropagation();
                      onAdditionalInfoClick(page, additionalInfo);
                    }}
                    className="waypoint-marker w-[2.5vh] h-[2.5vh] cursor-pointer text-justify rounded-full flex justify-center items-center bg-red-600"
                    style={{
                      transition: "all 0.3s ease",
                      filter: "drop-shadow(0 0 8px rgba(255, 0, 0, 0.6))",
                      animation: "pulse-glow 2s ease-in-out infinite",
                    }}
                    onMouseEnter={(e) => {
                      e.currentTarget.style.filter =
                        "drop-shadow(0 0 15px rgba(255, 0, 0, 1))";
                      e.currentTarget.style.transform = "scale(1.15)";
                    }}
                    onMouseLeave={(e) => {
                      e.currentTarget.style.filter =
                        "drop-shadow(0 0 8px rgba(255, 0, 0, 0.6))";
                      e.currentTarget.style.transform = "scale(1)";
                    }}
                  >
                    <svg
                      viewBox="-8 -8 48.00 48.00"
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      fill="#ffffff"
                      stroke="#ffffff"
                      stroke-width="1.28"
                    >
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></g>
                      <g id="SVGRepo_iconCarrier">
                        {" "}
                        <g id="icomoon-ignore"> </g>{" "}
                        <path
                          d="M16.001 1.072c5.291 0 9.596 4.305 9.596 9.597 0 1.683-0.446 3.341-1.29 4.799l-8.307 14.394-8.308-14.395c-0.843-1.456-1.289-3.115-1.289-4.798 0-5.292 4.305-9.597 9.597-9.597zM16.001 14.4c2.058 0 3.731-1.674 3.731-3.731s-1.674-3.731-3.731-3.731c-2.058 0-3.732 1.674-3.732 3.731s1.674 3.731 3.732 3.731zM16.001 0.006c-5.889 0-10.663 4.775-10.663 10.663 0 1.945 0.523 3.762 1.432 5.332l9.23 15.994 9.23-15.994c0.909-1.57 1.432-3.387 1.432-5.332 0-5.888-4.774-10.663-10.662-10.663v0zM16.001 13.334c-1.472 0-2.666-1.193-2.666-2.665 0-1.471 1.194-2.665 2.666-2.665s2.665 1.194 2.665 2.665c0 1.472-1.193 2.665-2.665 2.665v0z"
                          fill="#ffffff"
                        >
                          {" "}
                        </path>{" "}
                      </g>
                    </svg>
                  </div>
                </Html>
              );
            }
          });
        }

        return buttons;
      })}
    </>
  );
}

export default function CircleCarousel() {
  const [carouselRotation, setCarouselRotation] = useState(0);
  const [fullscreenPage, setFullscreenPage] = useState(null);
  const [fullscreenAdditionalPage, setFullscreenAdditionalPage] = useState(null);
  const [isRotating, setIsRotating] = useState(false);
  const controlsRef = useRef();
  const targetRotationRef = useRef(null);

  const [textForSpeech, setTextForSpeech] = useState(null);
  const speechSynth = window.speechSynthesis;
    let voices = speechSynth.getVoices();

    if(speechSynth.onvoiceschanged){
      speechSynth.onvoiceschanged = () => {
        voices = speechSynth.getVoices();
        // console.log(voices);
      };
    }
    const selectedVoice = voices.find(voice => voice.name === 'Google Nederlands');

  const handlePageClick = (page) => {
    setFullscreenPage(page);
    console.log('Page clicked:', page);
  };

  const handleAdditionalInfoClick = (page, additionalInfo) => {
    console.log('Additional info clicked:', additionalInfo);
    setFullscreenAdditionalPage(additionalInfo);
  };

  const textToSpeech = (text) => {
    
    // const speechSynth = window.speechSynthesis;
    // let voices = speechSynth.getVoices();
    console.log(voices);

    
    // setTextForSpeech(text);

    if (speechSynth.speaking) {
      speechSynth.cancel();
      return;
    }

    if (!speechSynth.speaking && text.length > 0) {
      const newUtter = new SpeechSynthesisUtterance(text);
      newUtter.voice = selectedVoice;
      newUtter.lang = 'nl-NL';
      newUtter.pitch = 1;
      newUtter.rate = 0.95;
      newUtter.volume = 1;

      speechSynth.speak(newUtter);
    }
    
  };

  useEffect(() => {
    const interval = setInterval(() => {
      if (controlsRef.current) {
        const azimuthAngle = controlsRef.current.getAzimuthalAngle();
        setCarouselRotation(azimuthAngle);
      }
    }, 50);

    return () => clearInterval(interval);
  }, [isRotating]);

  useEffect(() => {
    if (isRotating && targetRotationRef.current && controlsRef.current) {
      const targetAngle = targetRotationRef.current.angle;
      const currentAngle = controlsRef.current.getAzimuthalAngle();

      let angleDiff = targetAngle - currentAngle;
      if (Math.abs(angleDiff) > Math.PI) {
        angleDiff =
          angleDiff > 0 ? angleDiff - Math.PI * 2 : angleDiff + Math.PI * 2;
      }

      const startAngle = currentAngle;
      const startTime = Date.now();
      const duration = 800;

      const animate = () => {
        const elapsed = Date.now() - startTime;
        const progress = Math.min(elapsed / duration, 1);

        const eased =
          progress < 0.5
            ? 2 * progress * progress
            : 1 - Math.pow(-2 * progress + 2, 2) / 2;

        const newAngle = startAngle + angleDiff * eased;

        if (controlsRef.current) {
          controlsRef.current.setAzimuthalAngle(newAngle);
        }

        if (progress < 1) {
          requestAnimationFrame(animate);
        }
      };

      animate();
    }
  }, [isRotating]);

  return (
    <div className="w-full h-screen relative">
      <Canvas camera={{ fov: 10, position: [1, 0.75, 11] }}>
        <Carousel
          onPageClick={handlePageClick}
          onAdditionalInfoClick={handleAdditionalInfoClick}
          carouselRotation={carouselRotation}
        />
        <OrbitControls
          ref={controlsRef}
          enableDamping
          enableZoom={false}
          enablePan={false}
          minPolarAngle={1.52}
          maxPolarAngle={1.52}
          target={[0, -0.13, 0]}
          enabled={!fullscreenPage}
        />
      </Canvas>

      {fullscreenPage && (
        <div
          className="fixed top-0 left-0 w-full h-full bg-black/50 flex items-center justify-center offset-z-50 z-999"
          
        >
          <div className="fullscreen-content relative w-[60vw] h-[85vh] flex flex-wrap gap-2 items-center justify-center">
            <div className="w-full h-1/10 flex justify-end items-center flex-row">
            <button type="button" class="close-button text-white bg-white/10  border-2 border-white/30 focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-bold rounded-full text-sm w-12 h-12 focus:outline-none" 
            onClick={() => setFullscreenPage(null)}>X</button>
             
            </div>
            
            <div className="fullscreen-image w-full h-9/10 bg-white/10 backdrop-blur-md border border-white/30 rounded-lg shadow-lg p-10 overflow-y-auto text-center flex flex-wrap gap-5 items-center justify-center">
              <div className="w-3/4 h-8/10 pt-5">
                <p className="text-white text-lg text-left">{fullscreenPage.description || "No description available."}</p>
                  
                  {fullscreenPage.additionalinformations.length >= 1 && (
                    fullscreenPage.additionalinformations.map((info, index) => {
                      if (info.img === "") {
                        return (
                          <div key={index} className="mt-4">
                            <p className="text-white text-lg text-left">
                              {info.description || "No additional information available."}
                            </p>
                          </div>
                        );
                      }
                      return null;
                    })
                  )}
              </div>
            </div>
          </div> 
        </div>
      )}
      {fullscreenAdditionalPage && (
        <div 
          className="fixed top-0 left-0 w-full h-full bg-black/50 flex gap-5 items-center justify-center offset-z-50 z-999 pl-5 pr-5" 
        >
          <div className="fullscreen-content relative w-1/2 h-[90vh] flex flex-wrap  items-center justify-center">
          <div className="w-full h-1/12 flex justify-end items-center flex-row">
            
            </div>
            
            <div className="fullscreen-image w-full h-10/12 bg-white/10 backdrop-blur-md border border-white/30 rounded-lg shadow-lg overflow-y-auto text-center flex flex-col gap-5 p-10 items-center justify-center">
              <div className="w-full h-full">
                <img className="object-fit w-full h-full rounded-lg" src={fullscreenAdditionalPage.img} alt="" />
              </div>
             
            </div>
          </div> 

          <div className="fullscreen-content relative w-1/2 h-[90vh] flex flex-wrap  items-center justify-center">
            <div className="w-full h-1/12 flex justify-end items-center flex-row">
            <button type="button" class="close-button text-white bg-white/10  border-2 border-white/30 focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-bold rounded-full text-sm w-12 h-12 focus:outline-none" 
            onClick={() => setFullscreenAdditionalPage(null)}>X</button>
            </div>
            
            <div className="fullscreen-image w-full h-10/12 bg-white/10 backdrop-blur-md border border-white/30 rounded-lg shadow-lg overflow-y-auto text-center flex flex-col gap-5 p-10 items-center justify-center">
             
              <div className="w-full h-11/12">
                <p id="description_text" className="text-white text-lg text-left">{fullscreenAdditionalPage.description || "No additional information available."}</p>
              </div>
              <div className="w-full h-1/12 flex justify-start items-center flex-row">
              <button type="button" class="text-white bg-white/10  border-2 border-white/30 focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-bold rounded-full text-sm w-10 h-10 focus:outline-none flex items-center justify-center cursor-pointer hover:scale-[1.1]" 
                onClick={() => textToSpeech(fullscreenAdditionalPage.description)}><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="#ffffff" d="M61,29H49c-1.657,0-3,1.344-3,3s1.343,3,3,3h12c1.657,0,3-1.344,3-3S62.657,29,61,29z"></path> <path fill="#ffffff" d="M59.312,44.57l-11.275-4.104c-1.559-0.566-3.279,0.236-3.846,1.793c-0.566,1.555,0.235,3.277,1.793,3.844 l11.276,4.105c1.558,0.566,3.278-0.238,3.845-1.793C61.672,46.859,60.87,45.137,59.312,44.57z"></path> <path fill="#ffffff" d="M48.036,23.531l11.276-4.104c1.557-0.566,2.359-2.289,1.793-3.843c-0.566-1.558-2.288-2.362-3.846-1.796 l-11.275,4.106c-1.559,0.566-2.36,2.289-1.794,3.846C44.757,23.295,46.479,24.098,48.036,23.531z"></path> <path fill="#ffffff" d="M8,48c1.257,0,2.664,0,4,0V16c-1.342,0.002-2.747,0.002-4,0.002V48z"></path> <path fill="#ffffff" d="M0,20.002V44c0,2.211,1.789,4,4,4c0,0,0.797,0,2,0V16.002c-1.204,0-2,0-2,0C1.789,16.002,0,17.791,0,20.002 z"></path> <path fill="#ffffff" d="M37.531,0.307c-1.492-0.625-3.211-0.277-4.359,0.867L18.859,15.486c0,0-0.422,0.515-1.359,0.515 c-0.365,0-1.75,0-3.5,0v32c1.779,0,3.141,0,3.344,0c0.656,0,1.107,0.107,1.671,0.67c0.563,0.564,14.157,14.158,14.157,14.158 C33.938,63.594,34.961,64,36,64c0.516,0,1.035-0.098,1.531-0.305C39.027,63.078,40,61.617,40,60V4.002 C40,2.385,39.027,0.924,37.531,0.307z"></path> </g> </g></svg></button>
              </div>
            </div>
          </div> 
        </div>
      )}
    </div>
  )
}
