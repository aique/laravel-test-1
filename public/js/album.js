$(document).ready(function()
{
    $('#album-title-search input').keyup(function()
    {
        $.ajax(
        {
            url: '/albumSearch',
            type: 'POST',
            data: {title: $(this).val()}
        })
        .done(function(data)
        {
            if(data.status == 'success')
            {
                var numAlbums = data.albums.length;

                if(numAlbums > 0)
                {
                    var tableBody = $('table tbody');

                    tableBody.html('');

                     for(var i = 0 ; i < numAlbums ; i++)
                     {
                         var currentAlbum = data.albums[i];

                         tableBody.append($('<tr></tr>')
                             .append($('<td></td>').text(currentAlbum.title))
                             .append($('<td></td>').text(currentAlbum.artist))
                             .append(getYear(currentAlbum.year))
                             .append($('<td></td>').text('')));
                     }
                }
            }
        });
    })
});

function getYear(year)
{
    if(year)
    {
        return $('<td></td>').text(year);
    }
    else
    {
        return $('<td></td>').append($('<span></span>').addClass('no-year').text('-'));
    }
}