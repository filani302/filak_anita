
import React from "react";

export const Home = () =>{
    return(
        <div className="container">
          <div className="box green" >
            <h3>Napraforgós Nemzeti Tanúsító Védjegy célja</h3>
            <p>A falusi szálláshelyek napraforgós Nemzeti Tanúsító Védjegye a FATOSZ által több mint tíz éve létrehozott, és működtetett minősítési rendszer alapjaira épülve 2011 óta a minőségi falusi turizmus szimbóluma. A védjegy alapvető célja, hogy – összhangban az egyes szálláshelyek működtetéséről szóló 239/2009. Korm. rendeletben foglaltakkal – garanciát nyújtson a szálláshely szolgáltatás minőségének megfelelő színvonalára.  A falusi vendégházak 1-4 napraforgós besorolást nyerhetnek el a külső, belső megjelenés, a felszereltség, a szolgáltatások színvonala, valamint a szállásadó személyes felkészültségének, szakmai képzettségének függvényében.
            </p>
            <img id="logo" src="/public/logo.png" alt="" />
            <br />
            <img src="/public/holloko_masolata.jpg" alt="" />
          </div>
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
              <tbody>

              </tbody>
            </table>
            <h3></h3>
            <ul>
              <li>Ruhásszekrény</li>
              <li>Saját fürdőszoba zuhanytálca</li>
              <li>WC (fürdőszobával egyben)</li>
            </ul>
          </div>
          
          <div>
            <h3>A vendégszobák foglalatsága</h3>
            <p>Válasza ki </p>
            <select name="" id="">
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
            </select>
            <button>Adatok</button>
          </div>
        </div>

        
    )
};
