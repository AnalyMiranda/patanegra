@extends('layout.master')
    @section('content')
    <!--AGE VALIDATION-->
    <section class="age-validation">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 w-height">
                    <div class="vertical-align">
                        <img src="images/age_validation/logo_patanegra.png" alt="Logo Pata Negra" class="logo">
                        <h1 class="white pathway">¿Tienes 18 años?</h1>
                        <!--FORM-->
                        <form id="form">
                            <input id="day" name='day' type="text"  class="inputs text-center bg--yellow" placeholder="DD" maxlength="2">
                            <input id="month" name='month' type="text"  class="inputs text-center bg--yellow" placeholder="MM" maxlength="2">
                            <input id="year" name='year' type="text" class="inputs text-center bg--yellow" placeholder="AAAA" maxlength="4">
                            <input class="button-entrar inputs center-block mt-5" type="submit" value="ENTRAR">
                        </form>
                        <span class="validation center-block text-center"></span>
                        <!--TERMINOS Y CONDICIONES / AVISO PRIVACIDAD-->
                        <div class=" row mt-1 text-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <a data-toggle="modal" data-target="#modalAviso" data-keyboard="true" class="white">Aviso de Privacidad</a>    
                        </div> 
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--MODAL AVISO DE PRIVACIDAD-->
     <div id="modalAviso" class="modal fade modal-terminos" tabindex="1" role="dialog">
        <div class="modal-dialog text-justify vertical-align">
            <!-- Modal content-->
            <div class="modal-content">
                
                <button type="button" class="pull-right bg--transparent white mt-1 mr-1" data-dismiss="modal">&#935;</button>
                <h1 class="text-center text--yellow">AVISO DE PRIVACIDAD</h1>
                <!--carousel privacidad-->
                <div id="cPrivacidad" class="carousel slide white" data-ride="carousel" data-interval="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#cPrivacidad" data-slide-to="0" class="active"></li>
                        <li data-target="#cPrivacidad" data-slide-to="1"></li>
                        <li data-target="#cPrivacidad" data-slide-to="2"></li>
                        <li data-target="#cPrivacidad" data-slide-to="3"></li>
                        <li data-target="#cPrivacidad" data-slide-to="4"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <p>De conformidad con lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su Reglamento y los Lineamientos del Aviso de Privacidad, La Madrilena, S.A. de C.V., (el “Responsable”), con domicilio en Insurgentes Sur, número 800, piso 17, Colonia Del Valle, Delegación Benito Juárez, código postal 03100, en México, Distrito Federal, ponen el presente Aviso de Privacidad (el “Aviso”) a disposición de cualquier persona física (el “Titular”) que entreguen datos personales al Responsable.</p>
                            <p>El Responsable se compromete a observar los principios de licitud, consentimiento, información, calidad, finalidad, lealtad, proporcionalidad y responsabilidad para el tratamiento y protección de los datos personales recabados de conformidad con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.</p>
                            <p>El Responsable manifiesta que cuenta con las medidas de seguridad necesarias para garantizar la protección de los datos personales contra daño, pérdida, alteración, destrucción o el tratamiento no autorizado por el Titular.</p>
                        </div>

                        <div class="item">
                            <p>El Titular tiene derecho a: (i) limitar el uso o divulgación de sus datos personales; (ii) acceder a los datos personales que posee el Responsable; (iii) conocer el tratamiento que se le da a los mismos; (iv) solicitar la rectificación en los casos en que la información sea inexacta o incompleta; (v) solicitar la cancelación u oposición cuando la información no se requiera para llevar a cabo las finalidades señaladas en el Aviso, se haya utilizado en contravención a lo dispuesto en el Aviso y/o haya finalizado la relación contractual o servicio por el cual fueron transmitidos al Responsable.</p>
                            <p>Para hacer valer los derechos señalados en los párrafos anteriores, el Titular deberá presentar la solicitud respectiva, con los siguientes requisitos: nombre, domicilio y correo electrónico del Titular; documento que acrediten la identidad del Titular o en su caso los documentos que acrediten la representación del mismo; una descripción clara y precisa de los datos personales respecto de los cuales busca ejercer alguno de los derechos señalados en el párrafo anterior y cualquier otro elemento que facilite la identificación de los datos personales.</p>
                        </div>

                        <div class="item">
                            <p>Dicha solicitud deberá presentarse por escrito en el domicilio del Responsable o vía electrónica a la siguiente dirección privacidad@madrilena.com.mx . El Responsable dará contestación a la solicitud del Titular dentro de los veinte días naturales siguientes a la fecha en que se hubiera presentado la solicitud mediante notificación por escrito que se entregue en domicilio y/o correo electrónico del Titular.</p>
                            <p>En caso de que el Titular hubiera ejercitado su derecho de acceso, los datos personales que obren en poder del Responsable se podrán disposición del Titular mediante entrega de copias simples de los documentos que contienen su información o mediante formatos electrónicos que los contengan. La entrega de dichas constancias se hará en el domicilio y/o correo electrónico que hubiera señalado el Titular en su solicitud.</p>
                            <p>El consentimiento al tratamiento de los datos personales se entiende otorgado conforme a los términos y condiciones descritos en el Aviso cuando: El Titular no manifiesta oposición alguna; y/o tenga una relación jurídica vigente con el Responsable.</p>
                        </div>

                        <div class="item">
                            <p>El Titular podrá revocar en cualquier momento el consentimiento para el tratamiento de sus datos personales conforme a los términos establecidos en el presente Aviso, observado para ello el procedimiento establecido para el ejercicio de los derechos de acceso, rectificación, cancelación y oposición de datos personales.</p>
                            <p>El Responsable no se encuentra obligado a recabar el consentimiento del Titular cuando el tratamiento refiera a datos personales financieros y/o patrimoniales que tengan el propósito de cumplir obligaciones derivadas de una relación jurídica entre el Titular y el Responsable, de conformidad con lo establecido por el artículo 10 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.</p>
                            <p>Los datos personales del Titular pueden ser remitidos a personas nacionales o extranjeras con las que el Responsable tenga celebrados contratos o acuerdos; por lo que éstas tendrán en todo momento el carácter de Encargado (según dicho término se define en la fracción IX del artículo 3 de Ley Federal de Protección de Datos Personales en Posesión de los Particulares) en el tratamiento de los datos personales y deberá observar lo establecido en el Aviso.</p>
                        </div>
                        
                        <div class="item">
                            <p>El Responsable manifiesta que no transferirá la información personal a terceros, sin el consentimiento de su Titular, salvo que se actualice alguna de las excepciones previstas por el artículo 37 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.</p>
                            <p>La página de internet: www.madrilena.com.mx, así como algunas comunicaciones electrónicas que envía el Responsable, pueden hacer uso de cookies, web beacons u otras tecnologías que permitan recabar datos personales al momento en que el Titular hace contacto con las mismas. El uso de estas tecnologías y el procedimiento para deshabilitarlas estará disponible en cada una de la Páginas de Internet y en los comunicados electrónicos que el Responsable envíe al Titular.</p>
                            <p>El Responsable se reserva el derecho a efectuar en cualquier momento modificaciones y/o actualizaciones al Aviso, en atención a nuevas disposiciones legislativas y a nuevas políticas internas, dichas modificaciones estarán disponibles en el establecimiento y en las Páginas de Internet del Responsable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    
    