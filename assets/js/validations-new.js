$(document).ready(function(e){

   try{
      // Contador de inputs
      var countRequiredFiles = 0;
      $('.file-upload-required').each(function(e){
         // Incrementando contador de inputs para obtener el total de los mismos
         countRequiredFiles++;
         $(this).on("change", function() {
          // Al intentar cargar un archivo en algún input verificar si el mismo es menor de 1MB, si es así, proceder a cargarlo y añadir el mensaje con el nombre del archivo.
            if (this.files[0].size > 1000000) {
               let fileName = this.files[0].name;
               // Elimina el archivo del input
               $(this).val('');
               // Muestra la alerta al usuario
               Swal.fire({
                  title: "<b>¡Archivo muy pesado!</b>", 
                  type: 'error',
                  html: 'El archivo <b>"' + fileName +  '"</b> supera el límite permitido de 1 MegaByte o 1000 KiloBytes. Puede comprimirlo <b><a href="https://www.ilovepdf.com/compress_pdf" target="_blank">AQUÍ</a></b> e intentar cargarlo nuevamente.',  
                  // confirmButtonText: "Ok", 
                });     
               info = $(this).next(".info")
               info[0].innerHTML = '';
            } else {
               // Guardando nombre del archivo para agregarlo al div info
               let fileName = this.files[0].name,
               info = $(this).next(".info")
               info[0].innerHTML = fileName;
               // Alerta de archivo cargado
               Swal.fire({
                  title: "<b>Archivo cargado</b>", 
                  type: 'success',
                  html: 'El archivo <b>"' + fileName +  '"</b> ha sido cargado correctamente.',  
                  // confirmButtonText: "Ok", 
               });
            }

         });
      });       
      
      // Controla la carga de archivos opcionales
      $('.file-upload-optional').each(function(e){
         $(this).on("change", function() {
          // Al intentar cargar un archivo en algún input verificar si el mismo es menor de 1MB, si es así, proceder a cargarlo y añadir el mensaje con el nombre del archivo.
            if(this.files[0].size > 1000000){
               let fileName = this.files[0].name;
               // Elimina el archivo del input
               $(this).val('');
               // Muestra la alerta al usuario
               Swal.fire({
                  title: "<b>¡Archivo muy pesado!</b>", 
                  type: 'error',
                  html: 'El archivo <b>"' + fileName +  '"</b> supera el límite permitido de 1 MegaByte o 1000 KiloBytes. Puede comprimirlo <b><a href="https://www.ilovepdf.com/compress_pdf">AQUÍ</a></b> e intentar cargarlo nuevamente.',  
                  // confirmButtonText: "Ok", 
                });
               info = $(this).next(".info")
               info[0].innerHTML = '';
            } else {
               let fileName = this.files[0].name,
                  info = $(this).next(".info")
               info[0].innerHTML = fileName;
               Swal.fire({
                  title: "<b>Archivo cargado</b>", 
                  type: 'success',
                  html: 'El archivo <b>"' + fileName +  '"</b> ha sido cargado correctamente.',  
                  // confirmButtonText: "Ok", 
                });
            }

         });
      });        

   
      // Si ya se han cargado todos los archivos en los inputs que se pueda enviar la solicitud, si no un mensaje de alerta
      $("#btn-send").on("click", function(){

         // Contador de archivos requeridos cargados
         var countRequiredFilesCharged = 0;
         // Sumando archivos requeridos cargados
         $('.file-upload-required').each(function(e){
            countRequiredFilesCharged += this.files.length;
         });
         console.log('countRequiredFiles=>',countRequiredFiles);
         console.log('countRequiredFilesCharged=>',countRequiredFilesCharged);
         // Si la cantidad de archivos requeridos cargados es igual a la requerida, proceder al envio de formulario, si no un mensaje de alerta
         if (countRequiredFiles === countRequiredFilesCharged) {
            $("#btn-send").submit();
            Swal.fire({
               title: "<b>¡Buen trabajo!</b>", 
               type: 'success',
               html: 'Estamos enviando su solicitud, espere unos segundos mientras terminamos :)',  
               confirmButtonText: "Continuar", 
            });
         } else {
            Swal.fire({
               title: "<b>Faltan archivos por cargar</b>", 
               type: 'error',
               html: 'Para poder enviar su solicitud, debe cargar todos los archivos y datos requeridos',  
               confirmButtonText: "Continuar", 
            });
         }
         
      });

   }catch(e){
      console.log(e);
   }
 });