window.onload = function()
{
    document.getElementById("download").addEventListener("click", () => {
        var element = document.getElementById('cv');
        var opt = {
          filename:     'myCV.pdf',
          image:        { type: 'jpeg', quality: 1 },
        };
        html2pdf().set(opt).from(element).save();
    })
}