@extends('welcome')

@section('content')
<template v-if="menu==0">
  <dashboard></dashboard>
</template>
<template v-if="menu==1">
  <crudmovies></crudmovies>
</template>
<template v-if="menu==2">
  <crudgender></crudgender>
</template>
<template v-if="menu==3">
  <crudactors></crudactors>
</template>
<template v-if="menu==4">
  <cruddirectors></cruddirectors>
</template>
<template v-if="menu==5">
  <crudclients></crudclients>
</template>
<template v-if="menu==6">
  <crudsucursals></crudsucursals>
</template>
@endsection