var playlist;
var tracks;
var current;
var player;


function initplaylist(){

    len = tracks.length - 1;
    player = document.getElementById('player');
    current = 0;

    document.title = tracks[0]['name'] + ' | kuri_player';

    player.onended = function(){
        
        current++;
        
        if (current == len)
            current = 0;

        link = tracks[current]['url'];
        title = tracks[current]['name'] + ' | kuri_player';
        
        run(link, title);
    }  
    

} 


function run(link, title){
    player.src = link;
    player.load();
    player.play();
    document.title = title;
}
