import "./App.css";
import Carousel3D from "./components/Carousel3D";
// import "img/top-background.png";

function App() {
  return (
    <div className="App">
      <div className="background-container">
        <img src="img/page-13.jpg" alt="Top Background" className="bg-top" />
        {/* <img src="img/bottom-background.png" alt="Bottom Background" className="bg-bottom" /> */}
      </div>
      <Carousel3D />
    </div>
  );
}
