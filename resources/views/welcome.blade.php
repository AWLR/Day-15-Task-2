
<h1>Day15 Task 2</h1>

@php
$dataArray = [1,2,3,4,5,6,7,8,9,10] ;

echo '<ul>';
foreach ($dataArray as $number){
    $color = ($number % 2 == 0) ? 'blue' : 'red' ;
    echo '<li style= "color:'.$color.';">'.$number. '</li>';
}
echo '</ul>';

dump($dataArray);
@endphp

<script>
 @foreach ($dataArray as $name)
 console.log("{{$name}}");
 @endforeach
</script>
