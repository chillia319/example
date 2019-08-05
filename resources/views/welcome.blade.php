<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<title>MetOcean</title>
<body>

	<div class="container">
		<h2 style="text-align: center">MetOcean</h2>
		<style type="text/css">
			.pagination{
				position: fixed;
				}
		</style>

		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Time[UTC+0.0]</th>
						<th>lev[m]</th>
						<th>hs[m]</th>
						<th>hx[m]</th>
						<th>tp[s]</th>
						<th>tm01[s]</th>
						<th>tm02[s]</th>
						<th>dp[deg]</th>
						<th>dpm[deg]</th>
						<th>hs_sw1[m]</th>
						<th>hs_sw8[m]</th>
						<th>hs_sw1[s]</th>
						<th>tp_sw8[s]</th>
						<th>dpm_sw8</th>
						<th>dpm_sw1[deg]</th>
						<th>hs_sea8[m]</th>
						<th>hs_sea[m]</th>
						<th>tp_sea8[s]</th>
						<th>tp_sea[s]</th>
						<th>tm_sea[s]</th>
						<th>dpm_sea8[deg]</th>
						<th>dpm_sea[deg]</th>
						<th>hs_ig[m]</th>
						<th>hs_fig[m]</th>
						<th>wsp[kts]</th>
						<th>gst[kts]</th>
						<th>wd[deg]</th>
						<th>wsp100[kts]</th>
						<th>wsp50[kts]</th>
						<th>wsp80[kts]</th>
						<th>precip[mm/hr]</th>
						<th>tmp[C]</th>
						<th>rh[%]</th>
						<th>vis[km]</th>
						<th>Cld[%]</th>
						<th>cb[m]</th>
						<th>cso0[kts]</th>
						<th>cd0[deg]</th>
						<th>ss[m]</th>
						<th>sstMean direction at swell peak frequency[C]</th>
					</tr>
				</thead>
				<tbody>

					@foreach($data as $item)
					<tr>
						<td>{{$item->time}}</td>
						<td>{{$item->lev}}</td>
						<td>{{$item->hs}}</td>
						<td>{{$item->hx}}</td>
						<td>{{$item->tp}}</td>
						<td>{{$item->tm01}}</td>
						<td>{{$item->tm02}}</td>
						<td>{{$item->dp}}</td>
						<td>{{$item->dpm}}</td>
						<td>{{$item->hs_sw1}}</td>
						<td>{{$item->hs_sw8}}</td>
						<td>{{$item->tp_sw1}}</td>
						<td>{{$item->tp_sw8}}</td>
						<td>{{$item->dpm_sw8}}</td>
						<td>{{$item->dpm_sw1}}</td>
						<td>{{$item->hs_sea8}}</td>
						<td>{{$item->hs_sea}}</td>
						<td>{{$item->tp_sea8}}</td>
						<td>{{$item->tp_sea}}</td>
						<td>{{$item->tm_sea}}</td>
						<td>{{$item->dpm_sea8}}</td>
						<td>{{$item->dpm_sea}}</td>
						<td>{{$item->hs_ig}}</td>
						<td>{{$item->hs_fig}}</td>
						<td>{{$item->wsp}}</td>
						<td>{{$item->gst}}</td>
						<td>{{$item->wd}}</td>
						<td>{{$item->wsp100}}</td>
						<td>{{$item->wsp50}}</td>
						<td>{{$item->wsp80}}</td>
						<td>{{$item->precip}}</td>
						<td>{{$item->tmp}}</td>
						<td>{{$item->rh}}</td>
						<td>{{$item->vis}}</td>
						<td>{{$item->cld}}</td>
						<td>{{$item->cb}}</td>
						<td>{{$item->csp0}}</td>
						<td>{{$item->cd0}}</td>
						<td>{{$item->ss}}</td>
						<td>{{$item->sst}}</td>
					</tr>

					@endforeach
					{{ $data->links() }}
				</tbody>
			</table>

		</div>
		<p style="text-align: center"> Occasional waves may be larger than Hx.Occasional gusts may be up to 50% greater </p>
	</div>

</body>
</html>

