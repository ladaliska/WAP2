var graph = 
[
    [0,3,0,0,0],
    [3,0,2,0,0],
    [0,2,0,4,0],
    [2,0,4,0,4],
    [0,0,0,0,0],
]
var visited=[];
function path(from, to){
    init()
    var pos = from;
    if(!pathToEnd(from,to)){
        while(pos != to){
            pos = moveToNeighbor(pos)
        }
        throw "cesta existuje"
    }
}

function pathToEnd(pos, end){
    if(graph[pos][end] != 0){
        throw "cesta existuje"
    }
    else{
        return 0
    }
}
function moveToNeighbor(apos){ // přesunutí do další možný pozice
    for(i=0;i < graph[apos].length;i++){
        if(graph[apos][i]!=0 && visited[apos][i]==0 && apos != i){
            visited[apos][i] = 1
            if(checkIfWay(apos,i)){
                return i;
            }
        }
    }
    throw "cesta neexistuje"
}

function checkIfWay(apos,i){ // Ochrana před zapadnutím do jednosměrky
    for(e=0;e<visited[apos].length;e++){
        if(graph[i][e]!=0 && visited[i][e]==0){
            return 1;
        }
    }
}

function init(){
    for(i=0;i<graph.length;i++){
        visited.push([])
        for(e=0;e<graph.length;e++){
            visited[i].push(0)
        }
    }
}

path(4,0);
