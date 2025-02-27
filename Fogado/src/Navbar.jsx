import React from "react";
import { useState } from "react";
import { Link, NavLink } from "react-router-dom";
import "./Navbar.css";
import App from "./App";


export const Navbar = () => {
    const [menuOPen,setMenuOPen]= useState(false)
     return (
        <nav>
            <Link to="/" className="title">Címoldal</Link>
           <div className="menu" onClick={() =>
             {
                setMenuOPen(!menuOPen);
            }
           }>
             <span></span>
             <span></span>
             <span></span>
           </div>
          <ul className={menuOPen ? "open" : ""}>
                <li> 
                    <NavLink to="/">Fooldal</NavLink>
                </li>
                <li> 
                    <NavLink to="/foglalas">Foglalas</NavLink>
                </li>
          </ul>

        </nav>
     );

};