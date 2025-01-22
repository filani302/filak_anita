const btn = document.createElement("button");
btn.onclick = function () {
    alert("Natív gomb megnyomva!")
}
btn.innerHTML = "Natív gomb";
document.getElementById("nativ-button-container").appendChild(btn);
 
const gomb = React.createElement("button",  //    "gomb": Unkown world.
    {
        onclick: function()
        {
            alert("Ez eg react kód!");
        },
    },
    "React gomb"   // "gomb": Unkown world.
)
 
ReactDom.rander(gomb,documentElementById("react-button-container"));

btn.innerHTML="Natív";
document.getElementById("nativ-button-container").appendChild(btn);
const gomb = React.createElement("button",
    onClick: funkcion()
    {
        alert("Ez egy react kód.");
    },
},
React;
}





console.log("Hello World")
