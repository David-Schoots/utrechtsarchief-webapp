import "./App.css";
import CircleCarousel from "./components/CircleCarousel";
// import ReadApi from "./components/ReadApi";

function App() {
  // const dataApi = ReadApi(); // Haal de data op van ReadApi

  return (
    <div className="App p-0 m-0">
      <div className="background-container">
        <img
          src="img/logo-web.svg"
          alt="logo Het Utrechts Archief"
          className="bg-logo"
        />
      </div>

      <CircleCarousel />
    </div>
  );
}

export default App;
