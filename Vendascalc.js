class Produto{

	constructor(){
		this.id = 1;
		this.arrayProdutos = [];
	}

	salvar(){
		let produto = this.lerDados();

		if(this.validaCampos(produto)){
			this.adicionar(produto);
		}

		this.listaTabela();
	}

	listaTabela(){
		let tbody = document.getElementById('tbody');
		tbody.innerText = '';

		for(let i = 0 ; i < this.arrayProdutos.length ; i++){
			let tr = tbody.insertRow();

			let td_id = tr.insertCell();
			let td_produto = tr.insertCell();
			let td_valor = tr.insertCell();
			let td_quant1 = tr.insertCell();
			let td_quant2 = tr.insertCell();
			let td_vt = tr.insertCell();
			let td_ri = tr.insertCell();

			td_id.innerText = this.arrayProdutos[i].id;
			td_produto.innerText = this.arrayProdutos[i].nomeProduto;
			td_valor.innerText = this.arrayProdutos[i].valorProduto;
			td_quant1.innerText = this.arrayProdutos[i].quantProduto1;
			td_quant2.innerText = this.arrayProdutos[i].quantProduto2;
			td_vt.innerText = this.arrayProdutos[i].valorTotal + " R$" ;
			td_ri.innerText = this.arrayProdutos[i].ri;

			td_id.classList.add("center");
			td_produto.classList.add("center");
			td_valor.classList.add("center");
			td_quant1.classList.add("center");
			td_quant2.classList.add("center");
			td_vt.classList.add("center");
			td_ri.classList.add("center");



		}
	}

	adicionar(produto){
		this.arrayProdutos.push(produto);
		this.id++;
	}

	lerDados(){
		let produto = {}

		produto.id = this.id;
		produto.nomeProduto = document.getElementById('produto').value;
		produto.valorProduto = document.getElementById('valor').value;
		produto.quantProduto1 = document.getElementById('quantidade1').value;
		produto.quantProduto2 = document.getElementById('quantidade2').value;

		produto.v1 = parseInt(produto.valorProduto) * parseInt(produto.quantProduto1);
		produto.v2 = parseInt(produto.valorProduto) * parseInt(produto.quantProduto2);
		produto.qtd2m = produto.v1 + produto.v2;

		produto.valorTotal =  produto.v1 + produto.v2;

		// Relação InterMês
		
			produto.prct = ((produto.v2 * 100)/produto.v1);
			if (produto.prct >= 100) {
				produto.ri = " + " + (produto.prct - 100).toFixed(2)  + " % ";
			}

			/*if(produto.valorTotal == 0){
				produto.ri = "Sem Valor";
			}*/

			else{
				produto.ri = (produto.prct - 100).toFixed(2) + " % ";
			}


		// 

		return produto;
	}

	validaCampos(produto){
		let msg = '';

		if(produto.nomeProduto == ''){
			msg += " - Informe o Nome do Produto";
		}

		if(produto.valorProduto == ''){
			msg += " - Informe o Valor do Produto ";
		}

		if(produto.quantProduto1 == ''){
			msg += " - Informe a Quantidade de Produtos Vendidos em M1 ";
		}

		if(produto.quantProduto2 == ''){
			msg += " - Informe a Quantidade de Produtos Vendidos em M2";
		}

		if(msg != ""){
			alert(msg );
			return false;
		}

		return true;
	}

	/*Imprimir(produto){

	}

	*/
}



var produto = new Produto();