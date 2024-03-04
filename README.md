# Práctica 1

## Introducción
El objetivo de esta práctica es la realización de una página web estática (HTML + CSS) de reservas de hoteles. Como se puede observar en el resultado se ha obtenido inspiración del diseño de booking.com. A continuación, veremos la diferencia de maquetar una página sin y con el uso de librerías de estilo, en nuestro caso, con el uso de Bootstrap 4.3.

## Apartado 1
En este primer apartado no utilizamos ninguna librería de estilo y programamos directamente con lenguaje de marcas, por lo tanto, solo disponemos de dos ficheros principales. Por una parte, disponemos del main.html, donde encontramos toda la estructura, componentes y contenido de nuestra página web. Por otro lado, contamos con el fichero style.css, donde definimos el estilo de nuestra página. También encontraremos una carpeta llamada img donde almacenamos las imágenes utilizadas en nuestra página.

Una vez creado el fichero HTML, en el head, indicamos el título de la página y
importamos el fichero CSS que se usará para el estilo de nuestro sitio web.

Nuestro body dentro del fichero HTML, se divide en tres bloques distintos, el header, el content y el footer. Dentro de nuestro fichero CSS definimos la fuente de letra que usaremos en toda nuestra web, en nuestro caso hemos escogido Montserrat sans-serif, también desactivamos el scroll horizontal, ya que no nos interesa, y le damos un efecto smooth a nuestro scroll, por último, eliminamos márgenes indeseados. 

Primero comentaremos los estilos comunes que se han usado a lo largo de la web, dado que los mencionaremos a lo largo de la memoria.

Se han definido distintos estilos de texto, para usar como complemento de los elementos HTML. Estos son b1 (o body1), que crea una letra bastante más ligera y pequeña para que sepamos que forma parte del contenido, y subtitle, con una opacidad menor y mucha más ligereza en la letra para que resalte el título.

También hemos definido dos tipos de botones, ambos redondeados para que sigan la misma estética. Uno de ellos es relleno con el color blue de fondo y con letras en color whitesmoke para crear un buen contraste, este es el botón por defecto, y también está en una versión más pequeña. El otro botón es outline-button este, tiene un color transparente y unas letras y un borde en color whitesmoke, de nuevo para crear un buen contraste dado que se usa en fondos oscuros.

Se ha especificado un estilo de input para que sea redondeado y así crear una coherencia en el diseño.

Por último, se ha creado el estilo row para poder distribuir los elementos de forma horizontal.

Ahora pasaremos a hablar más detalladamente de la estructura de cada bloque de nuestra página.

1-	Primer bloque: 

El header (figura 1) es la cabecera o la parte superior de nuestro sitio web. En él, encontramos el título, la descripción de quién somos, el objetivo de esta web y dos botones para poder registrarse o iniciar sesión en caso de tener una cuenta.

 ![Figura 1](https://github.com/miriamMartinezUB/cow/assets/31921873/e061ea79-de6d-4e5e-8238-fbe933408a7d) *Figura 1*

Para realizar esta parte hemos hecho uso de los elementos div para la distribución de las distintas secciones, h2 y h3 para los títulos, p para el contenido y por último input para los botones. 

Hemos usado los estilos subtitle, outline-button y row-space-between, esta última es igual que la row anteriormente mencionada con la diferencia que añade el máximo espacio posible entre los elementos. 

2-	Segundo bloque: 

El content se distribuye en dos partes, la izquierda (figura 2) y la derecha (figura 4 y 5), estos, están separados por un divider vertical. 

![Figura 3](https://github.com/miriamMartinezUB/cow/assets/31921873/b4c84b72-4f33-4739-a504-d8eb0aad4208) *Figura 3*

<table>
  <tr>
    <td style="text-align:center;">
      <img src="https://github.com/miriamMartinezUB/cow/assets/31921873/3f299811-b62d-49b2-a212-c3947db57eff" alt="Figura 2" width="300" />
      <br><i>Figura 2</i>
    </td>
    <td style="text-align:center;">
      <img src="https://github.com/miriamMartinezUB/cow/assets/31921873/7cb0bc5e-495c-48bf-b06f-dd85147831af" alt="Captura de pantalla 2024-03-04 a las 2 09 20" width="300" />
      <br><i>Figura 4</i>
    </td>
  </tr>
</table>
      
En la parte izquierda podemos observar 2 formularios divididos por un divider.
En ambos se usan inputs de distintos tipos, dependiendo la pregunta, limitamos el contenido de la respuesta, a números, fechas con un determinado formato o texto libre.

El segundo formulario es un método get, que busca en internet el texto ingresado en el input una vez haces clic en el botón.

También se usan los elementos, div para la distribución de los componentes, h3 para los títulos, y p para las preguntas.

Se utilizan los estilos row, input y el botón relleno pequeño.

En la parte derecha (figura 3 y 4) hacemos uso de los elementos div para la división del contenido, h1, h4 y h5 para los títulos y subtítulos, p para el contenido, table, tr, th para la creación de la tabla y a para añadir los enlaces.

Lo primero que encontramos es un conjunto de imágenes de hoteles (figura 3). En caso de que nuestra pantalla no sea lo suficientemente grande, se crea un scroll horizontal para poder visualizarlos todos, para una buena gestión de esto, se ha creado un estilo scroll . Dado que hemos definido un estilo redondeado en nuestros elementos, se ha creado el estilo image que redondea y les da la misma altura y anchura a todas las imágenes.

Lo último que encontramos dentro de este apartado contenido es la tabla (figura 4), a esta le hemos dado de nuevo un estilo con bordes redondeados y le hemos añadido todos los bordes para facilitar su lectura.


3-	Tercer bloque: 

El footer (figura 5), se encuentra al final de nuestra página y se usan los elementos div para alinear los componentes, p para el contenido con los estilos b1 y subtitle y input tanto para el botón como para añadir texto.

![Figura 5](https://github.com/miriamMartinezUB/cow/assets/31921873/bf7b89e9-b6b0-4c6e-a310-117e5886e950) *Figura 5*

## Apartado 2
En este segundo apartado utilizamos la librería de estilo Bootstrap 4.3 
por lo tanto, solo disponemos de un fichero principal, el main.html. Como en el apartado encontraremos una carpeta llamada img donde almacenamos las imágenes utilizadas en nuestra página. También encontramos las carpetas css y js dado que nos hemos descargado la versión de Bootstrap en local. Por último, encontramos la carpeta font, que contiene la fuente Montserrat que usamos en nuestra web. 

El objetivo es realizar la misma página web que en el apartado anterior.

Al igual que antes, una vez creado el fichero HTML, en el head, indicamos el título de la página e indicamos donde se encuentra nuestros ficheros de estilos, que en este caso es Bootstrap.

En este apartado, es mucho más sencillo mantener una coherencia y cohesión con los estilos dado que vienen proporcionados por una librería, que sigue los mismos patrones.

Usamos los mismos elementos HTML con la diferencia que podemos indicar en class el diseño que queremos seguir de los que vienen predeterminados en la librería que estamos usando. Aunque tenemos la excepción de los componentes nav y button. Nav lo usamos para el header, dado que pretende evolucionar a una barra de navegación. Button lo utilizamos para los inputs de tipo button.

Se ha evitado usar la flag style, dado que es el objetivo de usar una librería de estilos, aunque en ocasiones hemos tenido que usarlo, como para cambiar los colores predeterminados y especificar los mismos que en el apartado anterior. También ha sido necesario para definir el comportamiento del scroll y la opacidad de algunos elementos de texto.
