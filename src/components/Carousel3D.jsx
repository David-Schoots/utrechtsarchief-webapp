import { useState } from 'react';
import './Carousel3D.css';
import pageData from '../assets/Json/page_information.json';


const Carousel3D = ({ items = [] }) => {
  const [rotation, setRotation] = useState(-3.5);
  const [isDragging, setIsDragging] = useState(false);
  const [isPageOpen, setIsPageOpen] = useState(false);
  const [openPageIndex, setOpenPageIndex] = useState(null);
  const [startX, setStartX] = useState(0);
  const [currentRotation, setCurrentRotation] = useState(-3.5);

  // Load items from JSON and filter out empty objects
  const jsonItems = pageData
    .filter(page => page.page_id && page.image_url)
    .map(page => ({
      id: page.page_id,
      title: `Page ${page.page_id}`,
      image: page.image_url,
      color: '#3498db'
    }));

  const carouselItems = items.length > 0 ? items : jsonItems;
  const numItems = carouselItems.length;
  const angleStep = 360 / numItems;

  // Calculate the radius dynamically so tiles touch without gaps
  // tileWidth is 28vw from CSS - we need to calculate in vw units
  const tileWidthVw = 42; // This should match the width in your CSS
  const angleStepRad = (angleStep * Math.PI) / 180; // Convert to radians
  const radius = (tileWidthVw / 2) / Math.tan(angleStepRad / 2);

  const togglePage = (index) => {
    setIsPageOpen(!isPageOpen);
    setOpenPageIndex(index);
    

  };

  const handleMouseDown = (e) => {
    setIsDragging(true);
    setStartX(e.clientX);
    setCurrentRotation(rotation);
  };

  const handleMouseMove = (e) => {
    if (!isDragging) return;    
    const deltaX = e.clientX - startX;
    const rotationChange = deltaX * 0.5; 
    setRotation(currentRotation + rotationChange);
  };

  const handleMouseUp = () => {
    setIsDragging(false);
  };

  const handleTouchStart = (e) => {
    setIsDragging(true);
    setStartX(e.touches[0].clientX);
    setCurrentRotation(rotation);
  };

  const handleTouchMove = (e) => {
    if (!isDragging) return;
    const deltaX = e.touches[0].clientX - startX;
    const rotationChange = deltaX * 0.5;
    setRotation(currentRotation + rotationChange);
  };

  const handleTouchEnd = () => {
    setIsDragging(false);
  };

  return (
    <div className="carousel-container">
     
      
      <div 
        className="carousel-scene"
        isPageOpen
        onMouseDown={handleMouseDown}
        onMouseMove={handleMouseMove}
        onMouseUp={handleMouseUp}
        onMouseLeave={handleMouseUp}
        onTouchStart={handleTouchStart}
        onTouchMove={handleTouchMove}
        onTouchEnd={handleTouchEnd}
      >
        <div 
          className="carousel-circle"
          style={{ transform: `rotateY(${rotation}deg)` }}
        >
          {carouselItems.map((item, index) => {
            const angle = angleStep * index;
            const effective = ((angle + rotation) % 360 + 360) % 360; 
            let topValue;
            if (effective <= 180) {
              topValue = 20 - (40 * effective) / 180;
            } else {
              topValue = -20 + (40 * (effective - 180)) / 180;
            }
            const angleX = `${topValue}%`;
            
        
            const isExpanded = isPageOpen && index === openPageIndex;
            const scaleValue = isExpanded ? 1.5 : 1;
            const translateY = isExpanded ? '1rem' : angleX;
            
            return (
              <div
                key={item.id || index}
                className={`carousel-item`}
                style={{
                  transform: `rotateY(${angle}deg) translateZ(${radius}vw) translateY(${translateY}) scale(${scaleValue})`,
                  backgroundColor: item.color || '#3498db',
                }}
                onClick={() => togglePage(index)}
              >
                <div className="carousel-item-content" >
                  {item.image ? (
                    <img src={item.image} alt={item.title} />
                  ) : (
                    <div className="text-content">
                      <h3>{item.title}</h3>
                      {item.description && <p>{item.description}</p>}
                    </div>
                  )}
                </div>
              </div>
            );
          })}
        </div>
      </div>
      
      
    </div>
  );
};

export default Carousel3D;
