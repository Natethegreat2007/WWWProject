<?php
$questions = [
    'easy' => [
        [
            'text'    => 'What does Big-O notation describe?',
            'options' => ['Exact runtime of an algorithm', 'Upper bound on growth rate', 'Memory used by a variable', 'Number of bugs in code'],
            'answer'  => 1,
            'points'  => 10
        ],
        [
            'text'    => 'Which data structure uses FIFO (First In, First Out) ordering?',
            'options' => ['Stack', 'Priority Queue', 'Queue', 'Linked List'],
            'answer'  => 2,
            'points'  => 10
        ],
        [
            'text'    => 'What is the time complexity of accessing an element in an array by index?',
            'options' => ['O(n)', 'O(log n)', 'O(1)', 'O(n²)'],
            'answer'  => 2,
            'points'  => 10
        ],
        [
            'text'    => 'Which sorting algorithm repeatedly swaps adjacent elements if they are in the wrong order?',
            'options' => ['Merge Sort', 'Quick Sort', 'Insertion Sort', 'Bubble Sort'],
            'answer'  => 3,
            'points'  => 10
        ],
        [
            'text'    => 'What is a binary tree?',
            'options' => ['A tree where every node has exactly 2 children', 'A tree where nodes store binary numbers', 'A tree where each node has at most 2 children', 'A tree with exactly 2 levels'],
            'answer'  => 2,
            'points'  => 10
        ],
        [
            'text'    => 'Which data structure would you use to check if parentheses in an expression are balanced?',
            'options' => ['Queue', 'Stack', 'Array', 'Hash Table'],
            'answer'  => 1,
            'points'  => 10
        ],
        [
            'text'    => 'What is the worst-case time complexity of linear search?',
            'options' => ['O(1)', 'O(log n)', 'O(n log n)', 'O(n)'],
            'answer'  => 3,
            'points'  => 10
        ],
        [
            'text'    => 'Which of these has O(1) average-case lookup time?',
            'options' => ['Sorted Array', 'Binary Search Tree', 'Linked List', 'Hash Table'],
            'answer'  => 3,
            'points'  => 10
        ],
        [
            'text'    => 'What does a recursive algorithm do?',
            'options' => ['Calls another function', 'Uses only loops', 'Calls itself with a smaller input', 'Runs in parallel'],
            'answer'  => 2,
            'points'  => 10
        ],
        [
            'text'    => 'In a singly linked list, what does each node contain?',
            'options' => ['Only data', 'Data and a pointer to the next node', 'Data and pointers to both neighbors', 'Only a pointer'],
            'answer'  => 1,
            'points'  => 10
        ],
    ],

    'medium' => [
        [
            'text'    => 'What is the time complexity of binary search on a sorted array?',
            'options' => ['O(n)', 'O(n²)', 'O(log n)', 'O(1)'],
            'answer'  => 2,
            'points'  => 20
        ],
        [
            'text'    => 'What is the height of a balanced binary search tree with n nodes?',
            'options' => ['O(n)', 'O(log n)', 'O(√n)', 'O(1)'],
            'answer'  => 1,
            'points'  => 20
        ],
        [
            'text'    => 'Which traversal visits nodes in Left → Root → Right order?',
            'options' => ['Pre-order', 'Level-order', 'Post-order', 'In-order'],
            'answer'  => 3,
            'points'  => 20
        ],
        [
            'text'    => 'What is the worst-case time complexity of Quick Sort?',
            'options' => ['O(n log n)', 'O(n)', 'O(n²)', 'O(log n)'],
            'answer'  => 2,
            'points'  => 20
        ],
        [
            'text'    => 'Which algorithm finds the shortest path in an unweighted graph?',
            'options' => ['DFS', 'Dijkstra\'s', 'BFS', 'Prim\'s'],
            'answer'  => 2,
            'points'  => 20
        ],
        [
            'text'    => 'What collision resolution strategy does chaining use in hash tables?',
            'options' => ['Moving to the next empty slot', 'Doubling the table size', 'Storing colliding elements in a linked list', 'Rehashing with a second function'],
            'answer'  => 2,
            'points'  => 20
        ],
        [
            'text'    => 'What is the recurrence relation for Merge Sort?',
            'options' => ['T(n) = T(n-1) + O(1)', 'T(n) = 2T(n/2) + O(n)', 'T(n) = T(n/2) + O(1)', 'T(n) = T(n-1) + O(n)'],
            'answer'  => 1,
            'points'  => 20
        ],
        [
            'text'    => 'What does memoization mean in dynamic programming?',
            'options' => ['Deleting used subproblem results', 'Solving subproblems bottom-up', 'Caching results of subproblems to avoid redundant computation', 'Parallelizing recursive calls'],
            'answer'  => 2,
            'points'  => 20
        ],
        [
            'text'    => 'In Dijkstra\'s algorithm, what data structure gives the best time complexity?',
            'options' => ['Simple array', 'Sorted linked list', 'Min-heap (priority queue)', 'Stack'],
            'answer'  => 2,
            'points'  => 20
        ],
        [
            'text'    => 'A graph with V vertices stored as an adjacency matrix has what space complexity?',
            'options' => ['O(V + E)', 'O(V²)', 'O(E)', 'O(V log V)'],
            'answer'  => 1,
            'points'  => 20
        ],
    ],

    'hard' => [
        [
            'text'    => 'What does it mean for a problem to be NP-complete?',
            'options' => ['It has no known solution', 'It can be solved in polynomial time', 'It is in NP and every NP problem reduces to it in polynomial time', 'It requires exponential memory'],
            'answer'  => 2,
            'points'  => 30
        ],
        [
            'text'    => 'What is the amortized cost per operation of n push/pop operations on a dynamic array that doubles in size?',
            'options' => ['O(n)', 'O(log n)', 'O(n²)', 'O(1)'],
            'answer'  => 3,
            'points'  => 30
        ],
        [
            'text'    => 'What is the time complexity of the Floyd-Warshall algorithm?',
            'options' => ['O(V² log V)', 'O(V³)', 'O(V² + E)', 'O(VE)'],
            'answer'  => 1,
            'points'  => 30
        ],
        [
            'text'    => 'Which of these problems is NP-complete?',
            'options' => ['Finding shortest path in a graph', 'Sorting n numbers', 'Boolean Satisfiability (SAT)', 'Binary search'],
            'answer'  => 2,
            'points'  => 30
        ],
        [
            'text'    => 'What is the key idea behind Kruskal\'s algorithm?',
            'options' => ['Greedily add edges by weight without forming cycles', 'Start from a vertex and expand outward', 'Use dynamic programming on the edge list', 'Apply BFS to all vertices simultaneously'],
            'answer'  => 0,
            'points'  => 30
        ],
        [
            'text'    => 'What does space complexity O(1) mean?',
            'options' => ['It uses no memory at all', 'Constant extra memory regardless of input size', 'It uses one byte of memory', 'It runs in one clock cycle'],
            'answer'  => 1,
            'points'  => 30
        ],
        [
            'text'    => 'In a skip list with n elements, what is the expected search time?',
            'options' => ['O(n)', 'O(n log n)', 'O(log n)', 'O(1)'],
            'answer'  => 2,
            'points'  => 30
        ],
        [
            'text'    => 'A Red-Black Tree guarantees O(log n) by enforcing what property?',
            'options' => ['All leaves are at the same depth', 'The tree is perfectly balanced', 'No path from root to leaf is more than twice as long as any other', 'Every node has exactly two children'],
            'answer'  => 2,
            'points'  => 30
        ],
        [
            'text'    => 'Which of these is true about a deadlock?',
            'options' => ['It only occurs in single-threaded programs', 'It requires mutual exclusion, hold-and-wait, no preemption, and circular wait', 'It is easily detected by the CPU', 'It is caused only by infinite recursion'],
            'answer'  => 1,
            'points'  => 30
        ],
        [
            'text'    => 'In the Master Theorem T(n) = aT(n/b) + f(n), what does b represent?',
            'options' => ['Number of subproblems', 'Cost of combining subproblems', 'Factor by which the problem size is reduced', 'Number of recursive calls'],
            'answer'  => 2,
            'points'  => 30
        ],
    ],
];