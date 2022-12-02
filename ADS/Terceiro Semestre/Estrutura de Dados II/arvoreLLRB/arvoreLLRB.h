
typedef struct NO *arvoreLLRB;

arvoreLLRB *cria_arvLLRB();
int cor(struct NO *H);

void trocaCor(struct NO *H);

struct NO *rotacionaEsquerda(struct NO *A);

struct NO *rotacionaDireita(struct NO *A);

struct NO *move2EsqRed(struct NO *H);

struct NO *move2DirRed(struct NO *H);

struct NO *balancear(struct NO *H);

int insere_arvoreLLRB(arvoreLLRB *raiz, int valor);

struct NO *insereNO(struct NO *H, int valor, int *resp);

int consulta_arvoreLLRB(arvoreLLRB *raiz, int valor);

struct NO *removeMenor(struct NO *H);

struct NO *procuraMenor(struct NO *atual);

struct NO *removeNO(struct NO *H, int valor);

int remove_arvoreLLRB(arvoreLLRB *raiz, int valor);


