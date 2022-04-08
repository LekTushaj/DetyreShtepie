import React from 'react'
import { Link } from 'react-router-dom'
import './Nav.css'

export default function Nav() {
  return (
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand brandi" href="#">
      KonvertimMonetar
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <Link to="/" className="nav-link navtext">
            Home
          </Link>
        </li>
        <li class="nav-item">
          <Link to="/Monedhat" className="nav-link navtext">
            Monedhat
          </Link>
        </li>
        <li class="nav-item">
          <Link to="/Konvertimi" className="nav-link navtext">
            Konvertimi
          </Link>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
 )
}
