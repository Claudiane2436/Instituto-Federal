#Essa consulta retorna o título do projeto e comentário
select titulo, 
	(select count(c.id_projeto) 
    from comentario c
	where c.id_projeto = p.id) as 'qtd comentarios'
from projetos p 
group by p.id;

#Essa consulta retorna o título do projeto, comentário e quantidade de likes
select titulo, 
	(select count(c.id_projeto) 
    from comentario c
	where c.id_projeto = p.id) as 'qtd comentarios',
    (select count(lpp.id_projeto) 
    from likes_por_projeto lpp
	where lpp.id_projeto = p.id) as 'qtd likes'
from projetos p 
group by p.id;

SELECT
    P.id,
    P.titulo,
    datap
FROM
    projetos P
WHERE
    P.id IN
    (
        SELECT
            C.id_projeto
        FROM
            comentario C
        WHERE
            P.id = C.id_projeto
    );
    
SELECT
    P.id,
    P.titulo,
    P.datap
FROM
    projetos P
WHERE
    P.id=
    (
        SELECT
        max(LP.id_projeto)
            
        FROM
            likes_por_projeto LP);
            
SELECT
    P.id,
    P.titulo,
    datap
FROM
    projetos P
WHERE
    P.id IN
    (
        SELECT
            C.id_projeto
        FROM
            comentario C
        WHERE
            P.id = C.id_projeto
    );
  
  #Segunda aula
    select F.titulo,
    F.Quantidade_Comentarios
    FROM 
    (SELECT 
    P.id,
    P.titulo,
    (SELECT 
    count(C.id_projeto)
    From
    comentario C
    Where C.id_projeto = P.id) AS Quantidade_Comentarios
    From projetos P)
    as F
    Where
    F.Quantidade_Comentarios >2


