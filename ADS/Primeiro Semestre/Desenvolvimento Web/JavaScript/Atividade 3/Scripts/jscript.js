/*Calculadora */
const obj_txt_display = document.querySelector('#txt_display')
const array_bt_num = document.querySelectorAll('.bt_num')
const array_botoes = document.querySelectorAll('.botoes')
const obj_bt_calcular = document.querySelector('#bt_calcular')
const obj_bt_limpar = document.querySelector('#bt_limpar')

let limpa_display = false

let conta_display = 0

for (obj_bt_num of array_bt_num){
	obj_bt_num.addEventListener('click', function() {FunMontaDisplay(this.innerText)})
	}

for (obj_botao of array_botoes) {
	const operacao = obj_botao.getAttribute('data-oper')
	obj_botao.addEventListener('click', function() {FunMontaDisplay(operacao)})
	}
	
obj_bt_calcular.addEventListener('click', FunCalculaResultado)

obj_bt_limpar.addEventListener('click', FunLimpaDisplay)

function FunMontaDisplay(par_txt){
	if(limpa_display == true){
		obj_txt_display.value = ''
		limpa_display = false
		conta_display = 0
		}
	if(conta_display <20){
		obj_txt_display.value += par_txt
		conta_display++
		}
	else{
		alert('Limite de digito!')
	}
}
	
function FunCalculaResultado(){
	try {
		obj_txt_display.value = eval(obj_txt_display.value)
	  }
	catch(erro){
		alert('Conta inválida. Erro: ' + erro.message)
		}
		limpa_display = true
	}

function FunLimpaDisplay(){
	obj_txt_display.value = ''
	conta_display = 0
	}	
	
/*Redimensionar o Polígono */

obj_num_largura = document.querySelector('#num_largura')
obj_num_altura = document.querySelector('#num_altura')
obj_div_poligono = document.querySelector('#div_poligono')
obj_p_perimetro = document.querySelector('#p_perimetro')

obj_num_largura.addEventListener('change', FunRedimensionaPoligono)
obj_num_altura.addEventListener('change', FunRedimensionaPoligono)

function FunRedimensionaPoligono(){
	if(obj_num_largura.value <50|| obj_num_largura.value > 100|| obj_num_altura.value <50||obj_num_altura.value >100){
		alert('Valor inválido!')
		}
	else{
		obj_div_poligono.style.width = obj_num_largura.value + 'px'
		obj_div_poligono.style.height = obj_num_altura.value + 'px'
		obj_div_poligono.innerText = 'Área: ' + (obj_num_largura.value * obj_num_altura.value) + 'px'
		obj_p_perimetro.innerText = 'Perímetro: ' + (parseInt(obj_num_largura.value) + parseInt(obj_num_altura.value)+parseInt(obj_num_largura.value) + parseInt(obj_num_altura.value))
		}
}


/*Redimensionar Imagem*/
const obj_sel_tamanho = document.querySelector('#sel_tamanho')
const obj_img_redimensionar = document.querySelector('#img_redimensionar')


obj_sel_tamanho.addEventListener('change', FunRedimensionaImagem)

	
function FunRedimensionaImagem() {
	 obj_img_redimensionar.setAttribute('src', 'Imagens/Regua.png')
	 obj_img_redimensionar.style.width = obj_sel_tamanho.value + 'px'
	}


/*Conversão de Moeda*/

const obj_real_dinheiro = document.querySelector('#real_dinheiro')
const obj_bt_dolar = document.querySelector('#bt_dolar')
const obj_bt_euro = document.querySelector('#bt_euro')
const obj_txt_resultado = document.querySelector('#txt_resultado')
const obj_tipo_dinheiro = document.querySelector('#tipo_dinheiro')

obj_bt_dolar.addEventListener('click', FunDolar)
obj_bt_euro.addEventListener('click', FunEuro)


function FunDolar(){
	  if(obj_real_dinheiro.value == ""){
		  alert('Preencha o campo!')
		  }
		  
		  else {
			if (obj_real_dinheiro.value >= 1||obj_real_dinheiro.value <5000){
				let obj_dolar = obj_real_dinheiro.value / 5
				obj_dolar = obj_dolar.toFixed(2)
				obj_txt_resultado.value = obj_dolar
				obj_tipo_dinheiro.innerText = 'dólares'
				  }
				  
				  
				 else{
				 alert('Valor Inválido')
				}
				}
			 
}/*Chave da função */

function FunEuro(){
	  if(obj_real_dinheiro.value == ""){
		  alert('Preencha o campo!')
		  }
		  
		  else {
			if (obj_real_dinheiro.value >= 1||obj_real_dinheiro.value <5000){
				let obj_euro = obj_real_dinheiro.value / 6
				obj_euro = obj_euro.toFixed(2)
				obj_txt_resultado.value = obj_euro
				obj_tipo_dinheiro.innerText = 'euros'
				  }
				  
				  
				 else{
				 alert('Valor Inválido')
				}
				}
			 
}


