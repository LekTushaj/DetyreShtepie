import {BrowserRouter, Routes, Route} from "react-router-dom";
import './App.css';
import Home from "./Pages/Home";
import Konvertimi from "./Pages/Konvertimi";
import Monedhat from "./Pages/Monedhat";
import Nav from "./Components/Nav";


function App() {
  return ( 
  <div>
    <BrowserRouter>
      <Nav/>
      <Routes>
        <Route path="/" element={<Home/>}/> 
        <Route path="/Monedhat" element={<Monedhat/>}/> 
        <Route path="/Konvertimi" element={<Konvertimi/>}/> 

      </Routes>
    </BrowserRouter>
    
     </div>
     );
  
}

export default App;
