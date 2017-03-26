<h2>Esta es la vista renderizada, desde el constructor</h2>

<article>
	<h3>Por qué el Framework Automáticamente llama al Modelo y a la Vista sin pasarselos por el constructor Padre</h3>
	<p>
		Si miramos, al crear el Controlador por defecto (index) y el método  por defecto (inicio), el framework automáticamente le pide que cree un Modelo y Vista para ese controlador. ¿Por qué sucede esto?. Pues bien, en el archivo autoload, el método load  carga automáticamente el controlador y se le pasa por parámetro el controlador y el método, de esta manera PHP entiende que los parámetros que se le pasan a la clase pertenecen al constructor de esa clase, en este caso el Controlador.
		Por eso cuando heredamos de la clase Controller, los parámetros que se le pasan son al constructor de la clase padre, y así ella llama al modelo y la vista.
		Hay que tener en cuenta que al llamar la vista, por defecto se crea la vista con el método que se pasa por la url, por ejemplo (index/inicio), de esta manera debe haber una carpeta llamada 'index' que es igual al controlador, y una vista llamada 'vista' que es igual al método.
		El modelo, también se carga por defecto, y el nombre del modelo es igual al del controlador a diferencia del sufijo Model que lo identifica como el modelo.
	</p>
</article>