import { Accordion, AccordionContent, AccordionItem, AccordionTrigger } from '@/components/ui/accordion'
import { nanoid } from 'nanoid'
// import Image from "next/image";

const FAQs = () => {
  return (
    <div className="container mb-[100px] flex flex-col items-end gap-20 px-4 md:mb-[160px] md:flex-row md:gap-12">
      <Accordion type="single" collapsible defaultValue="item-1" className="w-full max-w-[650px]">
        <span className="font-semibold">FAQs</span>
        <h4 className="py-[30px] font-bold">Have Any Questions?</h4>
        <p className="text-secondary-foreground mb-12 font-medium">Your Essential Guide to Frequently Asked Questions.</p>

        <div className="flex flex-col gap-4">
          {faqs.map(({ id, name, question, answer }) => (
            <AccordionItem key={id} value={name} className="border-border rounded-2xl border">
              <AccordionTrigger className="px-7 py-6 text-start text-lg font-medium hover:no-underline">{question}</AccordionTrigger>
              <AccordionContent className="px-7 py-6 text-start">{answer}</AccordionContent>
            </AccordionItem>
          ))}
        </div>
      </Accordion>

      <img width={504} height={548} className="mx-auto md:ml-auto" src="/assets/images/management-landing/faqs.svg" alt="shadcnkit" />
    </div>
  )
}

const faqs = [
  {
    id: nanoid(),
    name: 'item-1',
    question: 'What is project management software?',
    answer:
      'Project management software helps teams to stay organized and on track by providing a central hub for project information, task assignment & progress tracking.',
  },
  {
    id: nanoid(),
    name: 'item-2',
    question: 'How does project management software help teams?',
    answer:
      'Project management software helps teams to stay organized and on track by providing a central hub for project information, task assignment & progress tracking.',
  },
  {
    id: nanoid(),
    name: 'item-3',
    question: 'What features should I look for in project management software?',
    answer:
      'Project management software helps teams to stay organized and on track by providing a central hub for project information, task assignment & progress tracking.',
  },
  {
    id: nanoid(),
    name: 'item-4',
    question: 'Is project management software easy to use?',
    answer:
      'Project management software helps teams to stay organized and on track by providing a central hub for project information, task assignment & progress tracking.',
  },
  {
    id: nanoid(),
    name: 'item-5',
    question: 'Can project management software be used by remote teams?',
    answer:
      'Project management software helps teams to stay organized and on track by providing a central hub for project information, task assignment & progress tracking.',
  },
]

export default FAQs
