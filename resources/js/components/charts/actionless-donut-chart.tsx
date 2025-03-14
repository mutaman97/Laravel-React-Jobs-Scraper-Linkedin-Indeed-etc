'use client'

import { ApexOptions } from 'apexcharts'
import Chart from 'react-apexcharts'

interface Props {
  height?: number
  colors: string[]
  labels: string[]
  chartSeries: number[]
}

const ActionlessDonutChart = (props: Props) => {
  const { colors, labels, height = 172, chartSeries } = props

  const chartOptions = {
    stroke: { show: false },
    legend: { show: false },
    dataLabels: { enabled: false },
    colors: colors,
    labels: labels,
    plotOptions: { pie: { donut: { size: '75%' }, expandOnClick: false } },
    tooltip: {
      y: {
        formatter: val => String(val),
        title: { formatter: series => series },
      },
    },
  } as ApexOptions

  return (
    <div>
      <Chart type="donut" height={height} options={chartOptions} series={chartSeries} />
    </div>
  )
}

export default ActionlessDonutChart
