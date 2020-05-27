    @extends('principal')
    @section('contenido')

    @if(Auth::check())
            @if (Auth::user()->idrol == 1)
            <template v-if="menu==0">
                <dashboard></dashboard>
            </template>

            <template v-if="menu==1">
                <categoria></categoria>
            </template>

            <template v-if="menu==2">
                <producto></producto>
            </template>

            <template v-if="menu==3">
                <compra></compra>
            </template>

            <template v-if="menu==4">
                <proveedor></proveedor>
            </template>

            <template v-if="menu==5">
                <venta></venta>
            </template>

            <template v-if="menu==15">
                <pedido></pedido>
            </template>

            <template v-if="menu==6">
                <cliente></cliente>
            </template>

            <template v-if="menu==7">
                <user></user>
            </template>

            <template v-if="menu==8">
                <rol></rol>
            </template>

            <template v-if="menu==9">
                <consultacompra></consultacompra>
            </template>

            <template v-if="menu==10">
                <consultapedido></consultapedido>
            </template>

            <template v-if="menu==16">
                <consultaventa></consultaventa>
            </template>

            <template v-if="menu==11">
                <reporteindicador1></reporteindicador1>
            </template>

            <template v-if="menu==12">
                <reporteindicador2></reporteindicador2>
            </template>

            <template v-if="menu==13">
                <entregaperfecta_pretest></entregaperfecta_pretest>
            </template>

            <template v-if="menu==14">
                <entregastiempo_pretest></entregastiempo_pretest>
            </template>

            <template v-if="menu==17">
                <despacho></despacho>
            </template>
            
            @elseif (Auth::user()->idrol == 2)
            <template v-if="menu==0">
                <dashboard></dashboard>
            </template>
            <template v-if="menu==5">
                <venta></venta>
            </template>

            <template v-if="menu==6">
                <cliente></cliente>
            </template>

            <template v-if="menu==17">
                <despacho></despacho>
            </template>

            <template v-if="menu==10">
                <consultapedido></consultapedido>
            </template>

            <template v-if="menu==16">
                <consultaventa></consultaventa>
            </template>

            <template v-if="menu==11">
                <h1>Ayuda</h1>
            </template>

            <template v-if="menu==12">
                <h1>Acerca de</h1>
            </template>
            @elseif (Auth::user()->idrol == 3)
            <template v-if="menu==0">
                <dashboard></dashboard>
            </template>
            <template v-if="menu==1">
                <categoria></categoria>
            </template>

            <template v-if="menu==2">
                <producto></producto>
            </template>

            <template v-if="menu==3">
                <compra></compra>
            </template>

            <template v-if="menu==4">
                <proveedor></proveedor>
            </template>
            <template v-if="menu==9">
                <consultacompra></consultacompra>
            </template>
            <template v-if="menu==10">
                <consultapedido></consultapedido>
            </template>
            <template v-if="menu==15">
                <pedido></pedido>
            </template>
            @else
                <template>
                    <despacho></despacho>
                </template>
            @endif

    @endif
       
        
    @endsection