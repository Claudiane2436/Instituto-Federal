
typedef struct NO *arvAVL;
arvAVL *cria_arvAVL();

void liberar_arvAVL(arvAVL *raiz);

int vazia_arvAVL(arvAVL *raiz);



int altura_arvAVL(arvAVL *raiz);

int totalNO_arvAVL(arvAVL *raiz);

void preOrdem_arvAVL(arvAVL *raiz);

void emOrdem_arvAVL(arvAVL *raiz);

void posOrdem_arvAVL(arvAVL *raiz);

struct NO *remove_atual(struct NO *atual);

int consulta_arvAVL(arvAVL *raiz, int valor);

//calcula a altura de um nó
int alt_no(struct NO *no);

//Calcula o fator de Balaceamento de um n�
int fatorBalanceamento_NO(struct NO *no);

//Calcula maior valor
int maior(int x, int y);

//rotaçao simples � direita
void rotacaoLL(arvAVL *raiz);

//rotaçao simples � esquerda
void rotacaoRR(arvAVL *raiz);

void rotacaoLR(arvAVL *raiz);

void rotacaoRL(arvAVL *raiz);

int insere_arvAVL(arvAVL *raiz, int valor);

int remove_arvAVL(arvAVL *raiz, int valor);

struct NO *procurarmenor(struct NO *atual);
