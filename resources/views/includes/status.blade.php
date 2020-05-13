{{ $production->status == 1 ? 'Pending' : '' }} {{ $production->status == 2 ? 'Fermenting' : '' }} {{ $production->status == 3 ? 'Finished' : '' }}
