import "./App.css";
// import Carousel3D from "./components/Carousel3D";
import CircleCarousel from './components/CircleCarousel';




function App() {
  return (
    <div className="App p-0 m-0">
      <div className="background-container">
        <img src="img/logo-web.svg" alt="logo Het Utrechts Archief" className="bg-logo"/>        
      </div>

    
      <CircleCarousel />
    
     </div> 
  );
}

export default App;
