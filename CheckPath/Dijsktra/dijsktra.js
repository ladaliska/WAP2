function dijkstra(graph, start) {
    var n = graph.length;
    var distances = new Array(n).fill(Infinity);
    var visited = new Array(n).fill(false);

    distances[start] = 0;

    for (var i = 0; i < n - 1; i++) {
        var u = minDistance(distances, visited);
        visited[u] = true;

        for (var v = 0; v < n; v++) {
            if (!visited[v] && graph[u][v] !== 0 && distances[u] !== Infinity && distances[u] + graph[u][v] < distances[v]) {
                distances[v] = distances[u] + graph[u][v];
            }
        }
    }

    return {
        distances: distances,
    };
}

function minDistance(distances, visited) {
    var min = Infinity;

    for (var v = 0; v < distances.length; v++) {
        if (visited[v] === false && distances[v] <= min) {
            min = distances[v];
            minIndex = v;
        }
    }

    return minIndex;
}

var graph = [
    [0, 4, 2, 0, 0],
    [4, 0, 0, 5, 0],
    [2, 0, 0, 8, 10],
    [0, 5, 8, 0, 2],
    [0, 0, 10, 2, 0],
];

console.log(dijkstra(graph, 0));
