
import React from "react";
import './fogado.css'

export const Foglalas = () =>{
    return(
        <div className="container2">
            <div className="box">
            <h3>Falusi szálláshely fajtái</h3>
            <ul>
            <li>Vendégszoba: a vendégek rendelkezésére bocsátható önálló lakóegység, amely egy lakóhelyiségből, és a minősítéstől függően a hozzátartozó mellékhelyiségekből áll.
            </li>
            <li>Lakrész: önálló épület kettő, illetve több szobából álló lehatárolt része a minősítéstől függően hozzátartozó mellékhelyiségekkel együtt
            </li>
            <li>Vendégház: önálló épület, több szobával, mellékhelyiségekkel és főzési lehetőséggel rendelkező lakó-, illetve üdülőegység, családok vagy kisebb csoportok elszállásolására.
            </li>
            <li>Sátorozóhely: csak valamelyik falusi szálláshely típus mellett, mintegy azt kiegészítve üzemeltethető az előírt feltételek megléte esetén. Pl.: falusi vendégház sátorozóhellyel.
            </li>
            </ul>
            <img src="/public/ketagyas.jpg" alt="" />
          </div>
          <div className="box green">
            <h3>A hét törpe fogadó</h3>
            <table>
              <thead>        
                <tr>
                  <th>Szoba neve</th>
                  <th>Ágyak száma</th>
                </tr>
              </thead>
            </table>
            <h3></h3>
            <ul>
              <li>Ruhásszekrény</li>
              <li>Saját fürdőszoba zuhanytálca</li>
              <li>WC (fürdőszobával egyben)</li>
            </ul>
          </div>
          <div>
            <bold><h3></h3></bold>
            <table>
                <thead>
                    <th>
                        <tr>Szoba neve</tr>
                        <tr>Érkrzés dátuma</tr>
                        <tr>Távozás dátuma</tr>
                    </th>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
          </div>
        </div>
    )
};