/*Alterar cor de fundo */
const obj_sel_fundo = document.querySelector('#sel_fundo')
const obj_div_cor_fundo = document.querySelector('#div_cor_fundo')

obj_sel_fundo.addEventListener('change', FunMudaCorFundo)

function FunMudaCorFundo() {
	obj_div_cor_fundo.setAttribute('class',obj_sel_fundo.value) 	
}


/*Alterar Cor da Fonte */
const array_rb_fonte= document.querySelectorAll('[name="rb_fonte"]')
const obj_div_area_teste = document.querySelector('#div_area_teste')

for(obj_rb_fonte of array_rb_fonte){
	obj_rb_fonte.addEventListener('click', FunMudaCorFonte);
}

function FunMudaCorFonte(){
	for(obj_rb_fonte of array_rb_fonte){
		if(obj_rb_fonte.checked){
			obj_div_area_teste.classList.add(obj_rb_fonte.value)
			}
			else{
		    obj_div_area_teste.classList.remove(obj_rb_fonte.value)
				}
		}
	}
/*Colocar borda e traço*/
const obj_cb_linha_meio = document.querySelector('#cb_linha_meio')
const obj_cb_borda = document.querySelector('#cb_borda')

obj_cb_linha_meio.addEventListener('click', FunLinhaMeio)

obj_cb_borda.addEventListener('click', FunBorda)

function FunLinhaMeio(){
	  if(obj_cb_linha_meio.checked){
		  obj_div_area_teste.classList.add(obj_cb_linha_meio.value)
		  }
		  else{
			  obj_div_area_teste.classList.remove(obj_cb_linha_meio.value)
			  }
	}

function FunBorda(){
	if(obj_cb_borda.checked){
		obj_div_area_teste.classList.add(obj_cb_borda.value)
		}
		else{obj_div_area_teste.classList.remove(obj_cb_borda.value)}
		}
	
/*Trocar o texto*/
const obj_txt_texto_novo = document.querySelector('#txt_texto_novo')
const obj_bt_troca_texto = document.querySelector('#bt_troca_texto')

obj_bt_troca_texto.addEventListener('click',FunTrocaTexto)

function FunTrocaTexto(){
	if(obj_txt_texto_novo.value !=''){
		obj_div_area_teste.innerText = obj_txt_texto_novo.value
		} 
		else{
			alert('Digite algo no campo!')}
	}

/*Focar e Descofar imagem*/
const obj_bt_desfocar = document.querySelector('#bt_desfocar')
const obj_bt_focar = document.querySelector('#bt_focar')
const obj_img = document.querySelector('#descri')

obj_bt_desfocar.addEventListener('click', FunDesfocar)
obj_bt_focar.addEventListener('click', FunFocar)

function FunDesfocar(){
	  obj_img.setAttribute('class',obj_bt_desfocar.value) 
	}
	
function FunFocar(){
	  obj_img.setAttribute('class',obj_bt_focar.value)
	}
	
/*Fundo Escuro*/
const obj_cb_cor = document.querySelector('#cb_cor')
const obj_mudar_fundo = document.querySelector('#mudar_fundo')

obj_cb_cor.addEventListener('click', FunFundoEscuro)

function FunFundoEscuro(){
	  if(obj_cb_cor.checked){
		  obj_mudar_fundo.classList.add(obj_cb_cor.value)
		  }
		  else {
			  obj_mudar_fundo.removeAttribute("class")
			  }
		  
	}
/* Fim*/

/*Alterar Nome da Fonte*/
const obj_sel_fonte = document.querySelector('#sel_fonte')
const obj_div_fonte = document.querySelector('#div_area_nome')

obj_sel_fonte.addEventListener('change', FunMudaNomeFonte)

function FunMudaNomeFonte() {
	obj_div_fonte.setAttribute('class',obj_sel_fonte.value) 	
}


/*Colocar sombra nas letras */
const obj_cb_sombra = document.querySelector('#cb_sombra')
const obj_div_area_sombra = document.querySelector('#div_area_sombra')

obj_cb_sombra.addEventListener('click', FunAdicionaSombra)

function FunAdicionaSombra(){
	  if(obj_cb_sombra.checked){
		  obj_div_area_sombra.classList.add(obj_cb_sombra.value)
		  }
		  else {
			  obj_div_area_sombra.removeAttribute("class")
			  }
		  
	}
