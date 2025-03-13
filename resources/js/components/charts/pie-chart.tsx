'use client'

import { baseChartOptions } from '@/lib/base-chart-options'
import { ApexOptions } from 'apexcharts'
import merge from 'lodash.merge'
import Chart from 'react-apexcharts'

interface Props {
  height?: number
  colors: string[]
  chartSeries: number[]
  chartCategories: string[]
}

const PieChart = (props: Props) => {
  const { height = 280, colors, chartSeries, chartCategories } = props

  // REACT CHART OPTIONS
  const chartOptions = merge(baseChartOptions(), {
    labels: chartCategories,
    colors: colors,
    stroke: { width: 0 },
    legend: {
      show: true,
      fontSize: '14px',
      position: 'bottom',
      itemMargin: { horizontal: 10 },
      onItemClick: { toggleDataSeries: false },
      onItemHover: { highlightDataSeries: false },
      labels: {
        colors: colors,
      },
    },
    tooltip: {
      style: { fontSize: '14px' },
      y: { title: (name: string) => name, formatter: val => `${val}` },
    },
  } as ApexOptions)

  return <Chart type="pie" height={height} series={chartSeries} options={chartOptions} />
}

export default PieChart
