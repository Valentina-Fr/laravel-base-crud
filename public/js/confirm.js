const deleteItems = document.querySelectorAll('.delete-form');
        deleteItems.forEach(form => {
            form.addEventListener('submit', function(e) {
                const comicsName = form.getAttribute('data-name');
                e.preventDefault();
                const conf = window.confirm(`Do you want to delete ${comicsName}?`);
                if(conf) this.submit();
            });
        })