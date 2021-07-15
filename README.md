"# dev-php-tool" 

<h1>La clase Piezas</h1>

<h2>M&eacute;todos</h2>

<em>Todos son public</em>

<ol>
    <li>__construct () {}</li>
    <li>getArticles ()</li>
    <li>getCategories ()</li>
    <li>getTags ()</li>
    <li>getAttrs ()</li>
    <li>listTags (array $tags)</li>
    <li>listAttrs (array $attrs)</li>
    <li>listArticles (array $articles)</li>
    <li>listCategories (array $categories)</li>
</ol>

<p>
Constructor nulo 
</p>

<p>
El metodo getXXXXX() hace una peticion GET<br>
a la url https://api.piezas.xyz/recurso/subRecurso<br>
segun corresponda y nos devuelve un arreglo asociativo<br>
con la informacion obtenida.
</p>

<p>
<a href="https://mis.piezas.xyz">Endpoints</a>
</p>

<p>
El metodo listXXXX() recibe un arreglo por parametro<br>
y nos formatea y muestra por pantalla los datos obtenidos<br>
con los metodos getXXX() segun corresponda.
</p>

<h2>Como Usar Estos metodos</h2>

<p>
Primero tiene que instanciar la clase Piezas<br>
para tener acceso a los metodos : $piezas = new Piezas;<br>
ya tiene acceso a los metodos.
</p>

<p>
Un ejemplo : supongamos que queremos obtener <br>
los articulos disponibles en la base de datos<br>
primero hacemos la peticion y guardamos el resultado<br>
en una variable : $result = $piezas->getArticles();
</p>

<p>
La forma mas facil y rapida de mostrar<br>
estos datos es utilizando el metodo listArticles()<br>
implementado especificamente para procesar la respuesta del<br>
metodo getArticles().
</p>

<p>
Entonces simplemente le pasamos la variable $result<br>
al metodo listArticles() : $piezas->listArticles($result);
</p>

<p>
Tambien otra opcion valida puede ser anidar estos <br>
metodos : $piezas->listArticles($piezas->getArticles());
</p>