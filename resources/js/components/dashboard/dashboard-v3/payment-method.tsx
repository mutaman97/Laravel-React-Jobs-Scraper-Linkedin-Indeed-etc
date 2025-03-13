import { Button } from '@/components/ui/button'
import { Card } from '@/components/ui/card'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import { cn } from '@/lib/utils'
import { Activity } from 'lucide-react'
import { nanoid } from 'nanoid'
import { HTMLAttributes } from 'react'

type Props = HTMLAttributes<HTMLDivElement>

const PaymentMethod = ({ className, ...props }: Props) => {
  return (
    <Card className={cn('p-6', className)} {...props}>
      <div className="">
        <h6 className="text-sm font-semibold">Payment Method</h6>
        <p className="text-secondary-foreground text-sm">Change your account payment method.</p>
      </div>

      <div className="flex items-center justify-between gap-6 py-4">
        {['Card', 'Paypal', 'Wise'].map(item => (
          <div key={item} className="border-border flex w-full flex-col items-center rounded border p-4 hover:cursor-pointer hover:shadow-md">
            <Activity className="text-icon h-6 w-6" />
            <p className="text-secondary-foreground text-sm">{item}</p>
          </div>
        ))}
      </div>

      <div className="mb-4 flex flex-col gap-4">
        <div className="flex flex-col gap-1.5">
          <Label htmlFor="name">Name</Label>
          <Input id="name" type="text" placeholder="Your name" className="bg-card border-none px-3" />
        </div>

        <div className="flex flex-col gap-1.5">
          <Label htmlFor="city">City</Label>
          <Input id="city" type="text" placeholder="example@gmail.com" className="bg-card border-none px-3" />
        </div>

        <div className="flex flex-col gap-1.5">
          <Label htmlFor="card_number">Card number</Label>
          <Input id="card_number" type="text" placeholder="012 *********" className="bg-card border-none px-3" />
        </div>

        <div className="flex flex-col gap-1.5">
          <Label htmlFor="expires">Expires</Label>
          <Input id="expires" type="month" placeholder="January" className="bg-card border-none px-3" />
        </div>

        <div className="flex items-center gap-4">
          <div className="flex flex-col gap-1.5">
            <Label htmlFor="year">Year</Label>
            <Input id="year" type="number" placeholder="2000" className="bg-card border-none px-3" />
          </div>

          <div className="flex flex-col gap-1.5">
            <Label htmlFor="cvc">CVC</Label>
            <Input id="cvc" type="number" placeholder="CVC" className="bg-card border-none px-3" />
          </div>
        </div>
      </div>

      <Button className="w-full">Continue</Button>
    </Card>
  )
}

// CUSTOM DUMMY DATA SET
const DATA = [
  {
    id: nanoid(),
    name: 'Gage Paquette',
    role: 'Member',
    status: 'Online',
    image: '/assets/avatars/Ellipse-1.png',
  },
  {
    id: nanoid(),
    name: 'Lara Harvey',
    role: 'Director',
    status: 'Away',
    image: '/assets/avatars/Ellipse-2.png',
  },
  {
    id: nanoid(),
    name: 'Evan Scott',
    role: 'Manager',
    status: 'Offline',
    image: '/assets/avatars/Ellipse-3.png',
  },
  {
    id: nanoid(),
    name: 'Benja Johnston',
    role: 'Member',
    status: 'Online',
    image: '/assets/avatars/Ellipse-4.png',
  },
  {
    id: nanoid(),
    name: 'Aston Agar',
    role: 'Owner',
    status: 'Away',
    image: '/assets/avatars/Ellipse-4.png',
  },
]

export default PaymentMethod
