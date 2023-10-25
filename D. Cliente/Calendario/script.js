let textoMes = document.querySelector(".cambiarmes>h1"); //Coger elemento
const diaActual = new Date();
const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
var mesActual = diaActual.getMonth();
var anyorActual = diaActual.getFullYear();
textoMes.textContent = meses[mesActual]; //cambiar texto
let mesAnterior = document.querySelector(".mesanterior");
let mesSiguiente = document.querySelector(".messiguiente");
mesSiguiente.addEventListener("click",function(){
    cambiarMes(true, mesActual);
    textoMes.textContent = meses[mesActual];
});

mesAnterior.addEventListener("click",function(){
    cambiarMes(false, mesActual);
    textoMes.textContent = meses[mesActual]+" - "+ anyorActual;
});

var tablaSelector = document.querySelector("table");
generarDias(tablaSelector);



/*let fila = document.createElement("tr");
let columna = document.createElement("td");
fila.appendChild(columna);
tablaSelector.appendChild(fila);*/










function cambiarMes(sumarMes){
    if(sumarMes){
        if(mesActual == 11){
            mesActual=0;
            anyorActual++;
        } 
        else mesActual++;
        generarDias();
    }else{
        if(mesActual == 0){
            mesActual=11;
            anyorActual--;
        } 
        else mesActual--;
        generarDias();
    }
}

function generarDias(){
    tablaSelector.innerHTML='';
    let fila = document.createElement("tr");
    for(let i=0; i < 7; i++){
        let columna = document.createElement("td");
        switch(i){
            case 0: columna.textContent="L"; break;
            case 1: columna.textContent="M"; break;
            case 2: columna.textContent="X"; break;
            case 3: columna.textContent="J"; break;
            case 4: columna.textContent="V"; break;
            case 5: columna.textContent="S"; break;
            case 6: columna.textContent="D"; break;
        }
        fila.appendChild(columna);
    }
    tablaSelector.appendChild(fila);

    let dia = new Date(anyorActual, mesActual, 1);
    let semanas;
    if(dia.getDay == 6 || dia.getDay() == 0)semanas = 6;
    else semanas = 5;
    for(let i=0; i<semanas; i++){
        let filaDias = document.createElement("tr");
        for(let j=0; j<7; j++){
            let diaSemana;
            switch(j){
                case 0: diaSemana=1; break;
                case 1: diaSemana=2; break;
                case 2: diaSemana=3; break;
                case 3: diaSemana=4; break;
                case 4: diaSemana=5; break;
                case 5: diaSemana=6; break;
                case 6: diaSemana=0; break;
            }
            let columna = document.createElement("td");
            if(dia.getMonth() != mesActual){
                columna.classList.add("otroMes");
            }
            filaDias.appendChild(columna);
            if(dia.getDate() == diaActual.getDate() && dia.getMonth() == diaActual.getMonth() && dia.getFullYear()==diaActual.getFullYear()){
                columna.classList.add("diaActual");
            }
            if(dia.getDay() == diaSemana){
                columna.textContent = dia.getDate();
                dia.setDate(dia.getDate()+1);
            }
        }
        tablaSelector.appendChild(filaDias);
    }
}