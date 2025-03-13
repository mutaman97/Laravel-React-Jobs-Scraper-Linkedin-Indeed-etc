import ActionlessAreaChart from '@/components/charts/actionless-area-chart'
import { Card } from '@/components/ui/card'
import { cn } from '@/lib/utils'
import { HTMLAttributes } from 'react'

type Props = HTMLAttributes<HTMLDivElement>

const ProjectProgress = ({ className, ...props }: Props) => {
  return (
    <Card className={cn('h-[160px] overflow-hidden', className)} {...props}>
      <div className="flex items-center justify-between gap-2 px-6 pt-6">
        <h6 className="text-lg">Project Progress</h6>
        <span className="bg-card rounded-sm px-1 py-0.5 text-xs font-medium text-emerald-500">On Task</span>
      </div>

      <ActionlessAreaChart
        height={124}
        colors={['hsl(var(--primary))']}
        chartCategories={['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri']}
        chartSeries={[{ name: 'Tasks', data: [70, 60, 90, 80, 100, 70, 80] }]}
      />
    </Card>
  )
}

export default ProjectProgress
