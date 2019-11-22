import 'selectPointMap';


    setup = function( element ) {
        console.log(element);
        let container = document.querySelector('.locationString.MapBox.location');

        let prevValue = element.value.split(',');
        if (prevValue.center.isArray)
            this.setValue(prevValue.center.join(', ')+";"+prevValue.zoom);
        else
            this.setValue(prevValue.center+";"+prevValue.zoom);

        if (container.querySelectorAll('#selectMap').length===0) {
            let newMap = document.createElement('div');
            newMap.setAttribute('id', 'selectMap');
            newMap.setAttribute('style', 'height: 50vh; width:100%');
            newMap.setAttribute('id', 'selectMap');
            container.insertBefore(newMap, container.firstChild);
            map = new SelectPointMap('selectMap');
        }

        map.setFiredOnLoad(()=>{
            map.setGeoJson(prevValue.center);
        map.setCenterAndZoomMap(prevValue.center, prevValue.zoom);
    });
}

onOk = function() {
    // Create a new <span> element.

    let dialog = this;
    let elm = editor.document.createElement('span');

    let name = "\"name\":";
    if (dialog.getValueOf('tab-basic', 'name')==='')
        name+="\"\"";
    else
        name+="\""+dialog.getValueOf('tab-basic', 'name')+"\"";

    let centerZoom = dialog.getValueOf('tab-basic', 'center_zoom').split(';');
    let center = "\"center\":["+centerZoom[0]+']';
    let zoom = "\"zoom\":"+centerZoom[1];

    let data_map = [center, zoom, name];
    data_map = '{'+data_map.toString()+'}';

    elm.setAttribute('data-map', data_map);
    elm.setAttribute( 'class','MapMarker');
    elm.setText( "[MM]");
    editor.insertElement( elm );
},
// Invoked when the dialog is loaded.
onShow = function() {
    this.move(this.getPosition().x, 0); // Top center
    // Get the selection from the editor.
    let selection = editor.getSelection();

    // Get the element at the start of the selection.
    let element = selection.getStartElement();
    element = editor.restoreRealElement(element);

    // Create a new <span> element if it does not exist.
    if ( !element || element.getName() != 'span' ) {

        element = editor.document.createElement( 'span' );
        let center = "\"center\":[-79.756514, 22.028145]";
        let zoom = "\"zoom\":5";

        let data_map = [center, zoom];
        data_map = '{'+data_map.toString()+'}';

        element.setAttribute('data-map', data_map);
        // Flag the insertion mode for later use.
        this.insertMode = true;
    }
    else
        this.insertMode = false;

    // Store the reference to the <abbr> element in an internal property, for later use.
    this.element = element;

    // Invoke the setup methods of all dialog window elements, so they can load the element attributes.
    this.setupContent(this.element['$']);
}
};
});/**
 * Created by jo on 11/19/2019.
 */
