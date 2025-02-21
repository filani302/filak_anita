import React from "react";
import { useState, useEffect } from "react"
import 'bootstrap/dist/css/bootstrap.min.css';
import "tachyon"
import "axios"

const Regiok = (() =>{
    return (
        <>
    <label for="regiok">Régiók listája</label>
 
    <select name="regiok" id="regiok">
        <option value="budapest">Budapest</option>
        <option value="kozep-magyarorszag">Közép-Magyarország</option>
        <option value="nyugat-dunantul">Nyugat-Dunántúl</option>
        <option value="del-dunantul">Dél-Dunántúl</option>
        <option value="eszak-magyarorszag">Észak-Magyarország</option>
        <option value="eszak-alfold">Észak-Alföld</option>
    </select>

        <table>
            <thead>
                <tr>
                    <th>Rid</th>
                    <th>Regionév</th>
                    <th>Régió tipus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Person 1</th>
                    <th>Person 2</th>
                    <th>Person 3</th>
                </tr>
            </tbody>
        </table>
        </>
    )
    }    
    )


export default Regiok;