$ruta = '/imagenes';
$file = $request->file('foto');
//$rutilla = $file->
dd($file);
//$file = $request ->file('foto'); //->storeAs($ruta, $nombre)
//$nombre = $file->getClientOriginalName();
//$extension = $file->getClientOriginalExtension();

//$guardar = $file->move($ruta, $nombre);
//dd($file);
//dd($nombre);
//dd($extension);
//dd($ruta);
//dd($ruta);
//obtenemos el campo file definido en el formulario
 //$ext = $request -> file('foto') ->getClientOriginalExtension();
 //$nombre = $request -> id;
 //$file = $request->file('foto')->move(public_path().'/imagenes', $nombre.'.'.$file);
 //$nombre = file('foto')->getClientOriginalName();
 //->move(public_path().'/imagenes', $nombre.'.'.$ext);
 //obtenemos el nombre del archivo
 //indicamos que queremos guardar un nuevo archivo en el disco local
 //\Storage::disk('local')->put($nombre,  \File::get($file));
