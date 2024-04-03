cont = 1;
document.querySelector('#btnMais').addEventListener('click',()=>{
  let competenciaBox = document.querySelector('#competenciaBox');
  
  let input = document.createElement("input");
  input.className = 'competencia';
  input.id = 'competencia'+ cont;
  let txtCompetencia= document.querySelector('#txtCompetencia');
  
  input.setAttribute('name','competencia[]');
  competenciaBox.appendChild(input);
  if(cont == 1){
    let span = document.createElement("span");
    span.id = 'btnMenos';
    span.innerText = 'Menos';
    txtCompetencia.appendChild(span);
  }
    cont++;
  if(document.querySelector('#btnMenos')){
    document.querySelector('#btnMenos').addEventListener('click',()=>{
      console.log(competenciaBox.lastChild);
      competenciaBox.removeChild(competenciaBox.lastChild);
      console.log('depois'+competenciaBox.lastChild);
      cont--;
      if(cont == 1){
        //txtCompetencia.removeChild(document.querySelector('#btnMenos'));
        txtCompetencia.removeChild(txtCompetencia.lastChild);
        console.log(txtCompetencia.lastChild);
      }
    });
  }
});