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
El metodo es_valida() hace una busqueda<br>
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

<hr>

<h2>La clase Atributo</h2>

<h2>Propiedades</h2>

<ul>
 <li>private $atributo</li>
 <li>private $atributos</li>
</ul>

<h2>M&eacute;todos</h2>

<em>Todos son public</em>

<ol>
    <li>__construct (string $attr)</li>
    <li>es_valido (string $attr)</li>
    <li>setAttr (bool $es_valido, string $attr)</li>
    <li>getAttr ()</li>
</ol>

<p>
En el constructor ocurre toda la magia<br>
y lo unico que tenemos que hacer es <br>
pasarle un string en el momento que <br>
instanciamos la clase Atributo.
</p>

<p>
El metodo es_valido() hace una busqueda<br>
y compara el string que le asignamos<br>
en el constructor, en caso de encontrar<br>
una coincidencia devuelve true de lo contrario false
</p>

<p>
El metodo setAttr() verifica si el resultado<br>
de el metodo es_valido() retorno true<br>
y asigna el valor que recibimos en el <br>
constructor a la propiedad $atributo<br>
de lo contrario para la ejecucion del <br>
programa y le muestra por pantalla<br>
el enlace donde puede checar la lista<br>
de atributos validos.
</p>

<p>
En caso que quiera agregar otro atributo<br>
a la base de datos para que su programa <br>
no pare la ejecucion realice una peticion POST<br>
a la url : https://api.piezas.xyz/atributos/recursos<br>
enviando un json con la clave name y valor : {"name":"your_attr"}
</p>

<p>
Si todo sale bien al finalizar la busqueda<br>
puede obtener el valor verificado con el metodo<br>
getAttr().<br>
</p>

<h2>Como Usar  a la clase Atributo</h2>

<p>
Lo primero siempre sera instanciar la clase<br>
y asignarla a una variable : $attr = new Atributo('your_attr');<br>
en este caso es necesario pasarle el argumento al constructor<br>
y finalmente obtenemos el valor : $attr->getAttr(); .
</p>

<hr>

<h2>La Clase Atributos</h2>

<h2>Propiedades</h2>

<ul>
 <li>private $atributos</li>
</ul>

<h2>M&eacute;todos</h2>

<em>Todos son public</em>

<ol>
    <li>__construct (array $atributos)</li>
    <li>toString (array $atributos)</li>
    <li>setAttrs (string $attrs)</li>
    <li>getAttrs ()</li>
</ol>

<p>
En el constructor ocurre toda la magia<br>
y lo unico que tenemos que hacer es <br>
pasarle un array en el momento que <br>
instanciamos la clase Atributos.
</p>

<p>
El metodo toString() procesa el arreglo<br>
recibido y crea un string de atributos<br>
en formato single-word : "attr1 attr2"<br>
o en formato key => value : "attr1='value' attr2='value'"<br>
segun se le indique al constructor
</p>

<p>
setAttrs() recibe el array procesado a string<br>
y lo asigna a la propiedad $atributos.
</p>

<h2>Como Usar la Clase Atributos</h2>

<p>
Lo primero siempre sera instanciar la clase<br>
y asignarla a una variable : $attrs = new Atributos(['!' => 'single-word-format attr1 attr2']);<br>
O $attrs = new Atributos(['attr1' => 'key-value-forma','attr2' => 'value']);<br>
en este caso es necesario pasarle el argumento al constructor<br>
y finalmente obtenemos los atributos en formato string : $attrs->getAttrs(); .
</p>

<hr>

<h2>La Clase Elemento</h2>

<h2>Propiedades</h2>

<ul>
 <li>private $elemento</li>
</ul>

<h2>M&eacute;todos</h2>

<em>Todos son public</em>

<ol>
    <li>__construct (array $data)</li>
    <li>open (array $data)</li>
    <li>content ($content, bool $js)</li>
    <li>close (string $tag)</li>
    <li>setElemento (string $element)</li>
    <li>getElement ()</li>
</ol>

<p>
En el constructor ocurre toda la magia<br>
y lo unico que tenemos que hacer es <br>
pasarle un array en el momento que <br>
instanciamos la clase Elemento.
</p>

<p>
El metodo open() nos sirve para <br>
crear la etiqueta de apertura y cierre <br>
en algunas situaciones.
</p>

<p>
El metodo content() procesa <br>
el contenido que le enviemos <br>
en el constructor.
</p>

<p>
El metodo close lo <br>
utilizamos para crear <br>
la etiqueta de cierre cuando <br>
se requiera.
</p>

<p>
setElemento() recibe el array <br>
procesado a formato string y <br>
lo asigna a la propiedad $elemento.
</p>

<h2>Como Usar la Clase Elemento</h2>

<p>
Lo primero siempre sera instanciar la clase<br>
y asignarla a una variable : $element = new Elemento(['tag' => 'your_tag']); <br>
en este caso es necesario pasarle el argumento al constructor<br>
Como minimo es necesario pasarle el key => value , para definir <br>
una etiqueta. 
</p>

<h2>Claves aceptadas</h2>

<ul>
    <li>tag</li>
    <li>attrs</li>
    <li>js</li>
    <li>content</li>
    <li>self</li>
</ul>

<p>
self y js por default son false <br>
una sirve para indicar que queremos <br>
validar y crear una etiqueta selfclosing <br>
la otra nos sirve para indicar que en <br>
este elemento queremos aceptar el tag script en el content del elemento
</p>

<p>
tag , attrs y content corresponden <br>
a la anatomia de un elemento html <br>
tag tiene que ser enviado como string, <br> 
attrs tiene que ser enviado como array asociativo <br>
y content puede ser enviado como string o arreglo indexado
</p>

<p>
con el metodo getElement() obtenemos el elmento<br>
ya verificado y creado : $element->getElement();
</p>

<h2>La Clase XYZ y La Clase Envoltura</h2>

<p>
Ambas clases son wrappers de la clase Elemento <br>
pero funcionan ligeramente diferentes al momento <br>
de utilizar sus metodos.
</p>

<p>
XYZ utiliza metodos staticos <br>
para definir la etiqueta de apertura <br>
y cierre por separado de algun elemento html.
</p>

<p>
Envoltura utiliza metodos no estaticos <br>
los cuales para ser accedidos tenemos que <br>
crear un objeto de esta clase y la diferencia <br>
mas notable es que la etiqueta de apertura y cierre <br>
estan englobadas en una sola funcion y en su mayoria <br>
las etiquetas de esta clase estaran contenidas dentro <br>
de la estructura html(); .
</p>