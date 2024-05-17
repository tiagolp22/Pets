<div @class([
'alert absolute z-10 top-0 w-full flex justify-center items-center bg-blue-500',
'bg-red-500'=>$type=='danger',
'bg-amber-500' =>$type == 'warning',
'bg-green-500' =>$type == 'success',
])>
    {{ $slot }}
</div>
