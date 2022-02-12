// CODE EXPLAINATION: 

// 1. add a click event to all header (th) cells...
// 2. for the current table, find all rows (except the first)...
// 3. sort the rows, based on the value of the clicked column...
// 4. insert the rows back into the table, in the new order.


// SOURCE CODE LINK: https://stackoverflow.com/questions/14267781/sorting-html-table-with-javascript



const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

const comparer = (idx, asc) => (a, b) => ((v1, v2) => 
    v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
    )(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
    const table = th.closest('table');
    Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
        .sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
        .forEach(tr => table.appendChild(tr) );
})));
