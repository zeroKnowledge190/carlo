<script type='text/javascript'>

var dumps = [
    {place: 'california', coordinates: '(121.348, 14.769)'},
    {place: 'utah', coordinates: '(121.570, 14.915'}
];
             
var mapsi =  dumps.map(dump => dump);

console.log('dumps: ', mapsi);

// for (i = 0; 1 < mapsi.length; i++){

//      console.log(mapsi[1].split(","), mapsi[1][1].replace(/[)"]+/g, '')); 
       
// }

for (i = 0; i < mapsi.length; i++) { 
        
    var keys = mapsi[i].coordinates.split(",");
    console.log('keys: ', keys);
    console.log('latlng: ', keys[1].replace(/[)"]+/g, ''), keys[0].replace(/["(]+/g, ''));            
    console.log('name: ', mapsi[i].place);
}          

</script>
