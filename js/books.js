<script>

    const url = '/api/books?page=';

    function getBooks(filerType, filterValue)
    {
        let booksElement = document.getElementById('books');

        if (typeof filerType === 'undefined'){
            getAllBooks();
        } else {
            getFilteredBooks(filerType, filterValue);
        }
    }

    function getAllBooks()
    {
        let i = 0;

        while (data = callApi(url + i) !== null) {
            createBooks(data);
            i++;
        }

    }

    function getFilteredBooks(filerType, filterValue)
    {
        let i = 0;

        while (data = callApi(url + i + 'filterType=' + filerType + 'filterValue=' + filterValue) !== null) {
            createBooks(data);
        }
    }

    function callApi(url)
    {
        fetch(url)
            .then(function(data) {
                return data;
            })
            .catch(function(error) {
                console.log('Echec de connexion avec l\'api.')
            });
    }

    function createBooks(data)
    {
        let books = data.results;

        return books.map(function(book) {
            // foreach book.property
            book.forEach(function(key, value)) {
                let li = createNode('li');
                let a = createNode('a');
                let span = createNode('span');

                a.href = "filter.php?filterType=" + key + "filterValue=" + value
                span.innerHTML = value;

                append(a, span);
                append(li, a);
                append(ul, li);
            }
        })
    }

    function createNode(element)
    {
        return document.createElement(element);
    }

    function append(parent, element)
    {
        return parent.appendChild(element);
    }


</script>
