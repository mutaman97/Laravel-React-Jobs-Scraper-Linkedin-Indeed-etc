import ComponentViewer from '@/components/component-viewer'
import Chat from '@/components/dashboard/dashboard-v1/chat'
import Payments from '@/components/dashboard/dashboard-v1/payments'
import Statistics from '@/components/dashboard/dashboard-v1/statistics'
import StatisticsCards from '@/components/dashboard/dashboard-v1/statistics-cards'
import Subscriptions from '@/components/dashboard/dashboard-v1/subscriptions'
import TotalRevenue from '@/components/dashboard/dashboard-v1/total-revenue'

const Page = () => {
  return (
    <div className="mx-auto grid max-w-2xl grid-cols-1 gap-14">
      <ComponentViewer
        title="Statistics Cards Section"
        Component={StatisticsCards}
        componentPath="src/components/dashboard/dashboard-v1/statistics-cards.tsx"
      />

      <ComponentViewer title="Statistics Chart Section" Component={Statistics} componentPath="src/components/dashboard/dashboard-v1/statistics.tsx" />

      <ComponentViewer
        title="TotalRevenue Chart Section"
        Component={TotalRevenue}
        componentPath="src/components/dashboard/dashboard-v1/total-revenue.tsx"
      />

      <ComponentViewer
        title="Subscriptions Chart Section"
        Component={Subscriptions}
        componentPath="src/components/dashboard/dashboard-v1/subscriptions.tsx"
      />

      <ComponentViewer title="Payments Chart Section" Component={Payments} componentPath="src/components/dashboard/dashboard-v1/payments.tsx" />

      <ComponentViewer title="Chat Chart Section" Component={Chat} componentPath="src/components/dashboard/dashboard-v1/chat.tsx" />
    </div>
  )
}

export default Page
