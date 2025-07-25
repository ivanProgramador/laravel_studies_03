<div>
   <h3>Esse é o texto inicial do componente </h3>
   
   {{-- mostrando o conteudo do slot com uma diretiva do blade 
        sempre que um componente tem um slot dentro dele, ele vai tentar 
        mostrar o slot então qualquer coisa que tiver dentro das tags de 
        inicio / final da renderização do componente vai vir para dentro dessa
        variavel e sera exibida   
    --}}

   {{ $slot }}


   <h3>Esse é o texto final do componente </h3>

</div>