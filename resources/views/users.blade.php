<x-header componentName="user" />
@include("header_file")
@csrf

@foreach($data as $car)
    <h4>{{$car}}</h4>
@endforeach

@include("footer_file")

<!-- <h3>Last Visited page : -  {{URL::previous()}}</h3> -->

<script>
    var data = @json($data);
    console.log(data[0]);
</script>
