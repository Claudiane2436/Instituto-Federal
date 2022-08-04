/*Mudar a figura pela tabela */
const obj_sel_rede_social = document.querySelector('#sel_rede_social')
const obj_img_rede_social = document.querySelector('#img_rede_social')
const obj_p_rede_social = document.querySelector('#p_rede_social')

obj_sel_rede_social.addEventListener('change', FunMudaFigura)

function FunMudaFigura(){
	obj_img_rede_social.setAttribute('src', 'Imagens/' + obj_sel_rede_social.value + '.png')//Apenas funciona assim se for o mesmo tipo de imagem nesse caso o png
	obj_img_rede_social.setAttribute('alt', 'Logo ' + obj_sel_rede_social.value)
	obj_img_rede_social.setAttribute('title', 'Logo ' + obj_sel_rede_social.value)
	obj_p_rede_social.innerText = 'Logo ' +obj_sel_rede_social.value
	}
	
/*Adicionar Figuras */

const array_img_figuras = document.querySelectorAll('.figuras')
const obj_div_adiciona_figura = document.querySelector('#div_adiciona_figura')

const obj_img_nova = document.createElement('img')
const obj_input_novo = document.createElement('input')

for(obj_img of array_img_figuras){
	obj_img.addEventListener('click', function() {FunAdicionaFigura(this.src, this.alt)})
	}
	
function FunAdicionaFigura(par_src, par_alt){
	obj_img_nova.setAttribute('src', par_src)
	obj_img_nova.setAttribute('alt', par_alt)
	obj_img_nova.setAttribute('title', par_alt)
	obj_div_adiciona_figura.appendChild(obj_img_nova)
	
	obj_input_novo.setAttribute('type', 'text')
	obj_input_novo.setAttribute('disabled', true)
	obj_input_novo.setAttribute('value', par_alt)
	obj_input_novo.setAttribute('class', 'novo_input')
	obj_div_adiciona_figura.appendChild(obj_input_novo)
	}

/*Preecher a tabela*/
const array_td = document.querySelectorAll('#tab_principal td')
const obj_tab_vazia = document.querySelector('#tab_vazio')
const obj_caption_vazia = document.querySelector('#tab_vazio caption')
const obj_prog_tab_vazia = document.querySelector('#prog_tab_vazia')

let contador_linhas_tabela_nova = 0

for(obj_td of array_td) {
	obj_td.addEventListener('click', function() {FunPreencheTabela(this.innerText)})
	}
	
function FunPreencheTabela(par_text) {
	 if(contador_linhas_tabela_nova <5){
		 const obj_tr_novo = document.createElement('tr')
		 const obj_td_novo = document.createElement('td')
		 obj_td_novo.innerText = par_text
		 obj_tr_novo.appendChild(obj_td_novo)
		 obj_tab_vazia.appendChild(obj_tr_novo)
		 contador_linhas_tabela_nova++
		 obj_caption_vazia.innerText = 'Tabela com ' + contador_linhas_tabela_nova+ ' linha(s)' 
		 obj_prog_tab_vazia.value = contador_linhas_tabela_nova
		 }
		 else {
			 alert('Tabela cheia!')
			 }
	}

//*Mudar a Figura
const array_bt_pais = document.querySelectorAll('.bt_pais')
const obj_img_pais = document.querySelector('#img_pais')
const obj_pais = document.querySelector('#p_pais')

for(obj_bt_pais of array_bt_pais){
	obj_bt_pais.addEventListener('click', function() {FunMudaPais(this.value)})
	}

function FunMudaPais(par_value){
	 obj_img_pais.setAttribute('src', 'Imagens/' + par_value + '.png')
	 obj_img_pais.setAttribute('alt', + par_value)
	 obj_img_pais.setAttribute('title', + par_value)
	 obj_pais.innerText = par_value
	}



/*Preencher Lista*/

const array_sel_pais = document.querySelectorAll('#sel_pais')
const obj_sel_vazia = document.querySelector('#sel_vazia')
const obj_selecao_vazia = document.querySelector('#selecao_vazia')
const obj_prog_vazia = document.querySelector('#prog_vazia')

let contador_linha_tabela = 0

for(obj_lista of array_sel_pais){
	obj_lista.addEventListener('change', FunPreencheListaSelecao)
	}

function FunPreencheListaSelecao(){
	  if(contador_linha_tabela <4){
		  const obj_option_novo = document.createElement('option')
		  obj_lista.appendChild(obj_option_novo)
		  obj_option_novo.innerText = obj_lista.value
		  obj_sel_vazia.appendChild(obj_option_novo)
		  contador_linha_tabela++
		  obj_selecao_vazia.innerText = 'Tabela com ' + contador_linha_tabela + ' linha(s)'
		  obj_prog_vazia.value = contador_linha_tabela
		  
		  }
		  else {
			 alert('Tabela cheia!')
			 }
	}



