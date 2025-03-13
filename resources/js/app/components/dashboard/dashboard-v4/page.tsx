import ComponentViewer from '@/components/component-viewer'
import Goals from '@/components/dashboard/dashboard-v4/goals'
import Payments from '@/components/dashboard/dashboard-v4/payments'
import Report from '@/components/dashboard/dashboard-v4/report'
import StaticsCard from '@/components/dashboard/dashboard-v4/statics-card'
import TimeSpentExercising from '@/components/dashboard/dashboard-v4/time-spent-exercising'

const Page = () => {
  return (
    <div className="mx-auto grid max-w-2xl grid-cols-1 gap-14">
      <ComponentViewer title="Statics Card Section" Component={StaticsCard} componentPath="src/components/dashboard/dashboard-v4/statics-card.tsx" />

      <ComponentViewer title="Goals Section" Component={Goals} componentPath="src/components/dashboard/dashboard-v4/goals.tsx" />

      <ComponentViewer
        title="Time Spent Exercising Section"
        Component={TimeSpentExercising}
        componentPath="src/components/dashboard/dashboard-v4/time-spent-exercising.tsx"
      />

      <ComponentViewer title="Payments Section" Component={Payments} componentPath="src/components/dashboard/dashboard-v4/payments.tsx" />

      <ComponentViewer title="Report Section" Component={Report} componentPath="src/components/dashboard/dashboard-v4/report.tsx" />
    </div>
  )
}

export default Page
