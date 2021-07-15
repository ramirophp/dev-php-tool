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

<hr>

<h2>La clase Etiqueta</h2>

<h2>Propiedades</h2>

<ul>
 <li>private $etiqueta</li>
 <li>private $etiquetas</li>
</ul>

<h2>M&eacute;todos</h2>

<em>Todos son public</em>

<ol>
    <li>__construct (string $tag)</li>
    <li>es_valida (string $etiqueta)</li>
    <li>setTag (bool $es_valida, string $tag)</li>
    <li>getTag ()</li>
</ol>

<p>
En el constructor ocurre toda la magia<br>
y lo unico que tenemos que hacer es <br>
pasarle un string en el momento que <br>
instanciamos la clase Etiqueta.
</p>

<p>
El metodo es_valida() hace una busqueta<br>
y compara el string que le asignamos<br>
en el constructor, en caso de encontrar<br>
una coincidencia devuelve true de lo contrario false
</p>

<p>
El metodo setTag() verifica si el resultado<br>
de el metodo es_valida() retorno true<br>
y asigna el valor que recibimos en el <br>
constructor a la propiedad $etiqueta<br>
de lo contrario para la ejecucion del <br>
programa y le muestra por pantalla<br>
el enlace donde puede checar la lista<br>
de etiquetas validas.
</p>

<p>
En caso que quiera agregar otra etiqueta<br>
a la base de datos para que su programa <br>
no pare la ejecucion realice una peticion POST<br>
a la url : https://api.piezas.xyz/etiquetas/recursos<br>
enviando un json con la clave name y valor : {"name":"your_tag"}
</p>

<p>
Si todo sale bien al finalizar la busqueda<br>
puede obtener el valor verificado con el metodo<br>
getTag().<br>
</p>

<h2>Como Usar  a la clase Etiqueta</h2>

<p>
Lo primero siempre sera instanciar la clase<br>
y asignarla a una variable : $tag = new Etiqueta('your_tag');<br>
en este caso es necesario pasarle el argumento al constructor<br>
y finalmente obtenemos el valor : $tag->getTag(); .
</p>