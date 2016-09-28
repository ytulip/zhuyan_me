/*
*用原生的js写遮罩层
* */
class Veil{
    constructor(){
        this.surface =  document.querySelector('body');
    }

    down(){
        var innerHtml = `<div class="veil" style="position:fixed;top:0;right:0;bottom:0;left:0;z-index:99;background-color:#000000;opacity:.4;"> <div class="cell" style="width:100%;height:100%;display:table;">
        <div class="card" style="display:table-cell;text-align:center;    vertical-align: middle;">
        <span class="heartbeat-loader">Loading&#8230;</span>
        </div>
        </div></div>`;
        this.surface.insertAdjacentHTML('beforeEnd',innerHtml);
    }

    up(){
        var target = document.querySelector('.veil');
        this.surface.removeChild(target);
    }

    upAll(){
        var target = document.querySelector('.veil');
        this.surface.removeChild(target);
    }
}

/*全局对象*/
var veil = new Veil();

